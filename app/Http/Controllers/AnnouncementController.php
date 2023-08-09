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
        return view('announcement.index');
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
    
}
