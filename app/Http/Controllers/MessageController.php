<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;


class MessageController extends Controller
{
    public function countUnreadMessages()
    {
        // Count messages where is_read is false
        $unreadCount = FormSubmission::where('is_read', false)->orWhere('is_read', null)->count() ?? 0;

        return response()->json(['unreadCount' => $unreadCount]);
    }
    public function markAsRead(Request $request)
    {
        $messageId = $request->input('message_id');

        // Validate the message ID
        if (!$messageId) {
            return response()->json(['error' => 'Message ID is required'], 400);
        }

        // Update the message status to "read"
        $message = FormSubmission::find($messageId);

        if (!$message) {
            return response()->json(['error' => 'Message not found'], 404);
        }

        $message->is_read = true;
        $message->save();

        // Return updated unread count
        $unreadCount = FormSubmission::where('is_read', false)->count();

        return response()->json(['unreadCount' => $unreadCount]);
    }
}
