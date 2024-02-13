<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $user = $request->user();

        // Update user details
        $user->fill($request->validated());

        // Check if email has been updated
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save user details


        // Handle file upload (if present)
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Store the uploaded file in the specified directory within the storage/app/public folder
            $path = $file->store('profile', 'public');
            // Save the file path to the user's profile_img field in the database
            $user->my_avatar = $path;

        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {

        $validatedData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',

        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return redirect()->back()->with('message', 'The old password is incorrect.');

        }
        // update password
        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message', 'Password updated successfully.');

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
}
