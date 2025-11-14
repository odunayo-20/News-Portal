<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id', auth()->user()->id)->first();

        // dd($user);
        return view('admin.profile.index', compact('user'));
    }
}
