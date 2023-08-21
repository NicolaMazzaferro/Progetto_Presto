<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){

        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        
        return view('welcome', compact('announcements'));
    }

    // Gabriele: Funzione categoria
    public function categoryShow(Category $category)
    {
        
        $announcements = $category->announcements()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        // dd($announcements);
        return view('categoryShow', compact('category', 'announcements'));
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcement.index', compact('announcements'));
    }
}
