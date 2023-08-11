<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('announcement.index', compact('announcements'));

        // $announcements = Announcement::all(); // richiamata collection - Nicola
        // return view('announcement.index', compact('announcements'));
        // $announcement_to_check = Announcement::where('is_accepted' , null)->first();
        // return view('announcement.index', compact('announcement_to_check'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcement.create');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }

    // Index Announcement

    public function indexAnnouncement() {
        $announcements = Announcement::where('is_accepted', true)->paginate(6);
        return view('announcements.index', compact('announcements'));
    }
    
}
