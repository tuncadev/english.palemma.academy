<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        // Check if the avatar should be removed
        if ($request->has('avatar-delete')) {
            // Delete the existing avatar file if it exists
            if ($request->user()->avatar) {
                Storage::disk('public')->delete($request->user()->avatar);
                $request->user()->avatar = null; // Remove the avatar path from the database
            }
        }
        // Handle avatar upload
        if ($request->hasFile('avatar')) {

            if ($request->user()->avatar) {
                Storage::disk('public')->delete( $request->user()->avatar); // Delete the old avatar if it exists
            }

            $file = $request->file('avatar');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $folder = 'avatars/' . Str::random(10);
            $path = $file->storeAs($folder, $filename, 'public');

            $request->user()->avatar = $path; // Update the avatar path
        }
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function uploadAvatar(Request $request)
{
    $request->validate([
        'avatar' => 'required|image|mimes:jpg,jpeg,png,ico|max:2048|dimensions:max_width=1200,max_height=1200',
    ]);

    $user = $request->user();

    // Handle the file upload
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $folder = 'avatars/' . Str::random(10);
        $path = $file->storeAs($folder, $filename, 'public');

        // Delete the old avatar if it exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Save the new avatar path
        $user->update(['avatar' => $path]);
    }

    return back()->with('status', 'Avatar updated successfully.');
}
}
