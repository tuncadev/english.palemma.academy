<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\FormSubmission;
use App\Models\Course;
use App\Models\ExcludedIP;
use App\Models\Section;
use App\Models\Phrase;
use App\Models\Practice;
use App\Models\Quiz;
use App\Models\Transactions;
use App\Models\User;
use App\Models\Visitor;
use Exception;

/**
 * Class AdminController
 *
 * Quick Navigation:
 * - {@see AdminController::dashboard()} - List all users
 * - {@see AdminController::inbox()} - Show a user by ID
 * - {@see AdminController::update()} - Create a new user

 */


class AdminController extends Controller
{

    ###   DASHBOARD   ###
    public function dashboard() {

        return view('admin.dashboard');
    }


    ###   INBOX   ###

    public function inbox() {

        $messages = FormSubmission::get();

        return view('admin.inbox', compact('messages'));
    }


    ###   COURSES   ###
    public function courses($course_id) {

        $course = Course::where('id', $course_id)->first();
        $sections = Section::where('course_id', $course_id)->get();
        return view('admin.courses', compact('course', 'sections'));
    }


    ###   TRANSACTIONS   ###
    public function transactions() {

        $transactions = Transactions::get()->map(function ($transaction) {
            // Decode the JSON column (e.g., 'response') into an array
            if (isset($transaction->response) && is_string($transaction->response)) {
                $transaction->response = json_decode($transaction->response, true);
            }

            return $transaction;
        });

        return view('admin.transactions', ['transactions' => $transactions]);
    }


    ###   USERS   ###
    public function users() {
        $users = User::get();
        return view('admin.users', compact('users'));
    }



    ###   SECTIONS   ###
    public function sections($course_id, $section_id) {

        $section = Section::where('id', $section_id)->first();

        return view('admin.sections', compact('section', 'course_id'));
    }



    public function phrases($course_id, $section_id) {

        $phrases = Phrase::where('section_id', $section_id)->where('course_id', $course_id)->get();

        return view('admin.sections.phrases', compact('section_id', 'course_id', 'phrases'));
    }


    ###   PRACTICE   ###
    public function practice($course_id, $section_id) {

        $questions = Practice::where('section_id', $section_id)->where('course_id', $course_id)->get();

        return view('admin.sections.practice', compact('section_id', 'course_id', 'questions'));
    }



    ###   QUIZ   ###
    public function quiz($course_id, $section_id) {

        $questions = Quiz::where('section_id', $section_id)->where('course_id', $course_id)->get();

        return view('admin.sections.quiz', compact('section_id', 'course_id', 'questions'));
    }



    ###   VISITORS   ###
    public function visitors() {

        $visitors = Visitor::get() ?? null;

        return view('admin.visitors', compact('visitors'));
    }



    ###   VISITOR COUNT   ###
    public function getVisitorCount()
    {
        // Example: Fetch total visitor count
        $visitorCount = Visitor::sum('visit_count');

        return response()->json(['count' => $visitorCount]);
    }


    ###   VISITOR DETAILS   ###
    public function visitorDetails($id)
    {
        $visitor = Visitor::with(['pageViews', 'pageVisitCounts'])->findOrFail($id);

        return view('admin.visitor-details', compact('visitor'));
    }


    ###   ADD IP   ###
    public function addIp(Request $request)
    {
        try {
            $ipaddress = $request->get('ipaddress');

            $addIP = new ExcludedIP();
            $addIP->ip_address = $ipaddress;

            // Optional: Only add reason if provided
            if ($request->has('reason')) {
                $addIP->reason = $request->get('reason');
            }

            $addIP->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error("Failed to add IP", ['error' => $e->getMessage()]);
            return response()->json(['success' => false]);
        }
    }


    ###   DELETE IP   ###
    public function deleteIp(Request $request)
    {
        $id = $request->get('ipid') ?? null;

        $removeIP = ExcludedIP::find($id) ?? null;

        if ($removeIP) {
            $removeIP->delete();
            return redirect()->back()->with('success', 'IP removed sucessfully');
        }
    }


    ###   DELETE VISITOR   ###
    public function deleteVisitor(Request $request)
    {

        Log::info(session()->all());
            $id = $request->get('visitorIp') ?? null;

        $removeVisitor = Visitor::find($id) ?? null;

        try {
            if ($removeVisitor) {

                $removeVisitor->delete();

                return redirect()->route('admin.visitors')->with('message', 'Visitor removed successfully');

            } else {

                return redirect()->back()->with('error', 'Visitor not found.');
            }
        } catch (\Exception $e) {
            Log::error('Error deleting visitor:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Visitor cannot be removed. Please check logs.');
        }


    }



    ###   UPDATE   ###
    public function update(Request $request, $id, $model)
    {

        $row = $model::findOrFail($id);

        // Delegate the update and handle validation in the model
        $row->updateFields($request->all());

        return redirect()->back()->with('success', 'Row updated successfully!');
    }

}
