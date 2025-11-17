<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();

        // dd(Auth::user()->social_links['facebook'] ?? 'no link');
        return view('admin.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = User::where('id', auth()->user()->id)->first();

        // dd($user);
        return view('admin.profile.edit', compact('user'));
    }

   public function update(Request $request, $id)
{
    // Find user
    $user = User::findOrFail($id);

    // Validate
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:users,name,' . $id,
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'username' => 'required|string|max:255|unique:users,username,' . $id,
        'bio' => 'nullable|string',
        'social_links' => 'nullable',
        'avatar' => 'nullable|image|max:2048',
    ]);

  if ($request->social_links) {
    $validated['social_links'] = $request->social_links;
}

    // Avatar upload
    if ($request->hasFile('avatar')) {
        $validated['avatar'] = $request->file('avatar')->store('profile', 'public');
    }

    // Update the user
    $user->update($validated);
return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
}

}
