<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function workWithUs() {
        return view('workWithUs');
    }

    public function profile() {
        $user = Auth::user();
        $announcements = Announcement::where('user_id', $user->id)->where('is_accepted', true)->orderBy('created_at', 'desc')->take(3)->get();
        return view('profile', compact('announcements'));
    }
}
