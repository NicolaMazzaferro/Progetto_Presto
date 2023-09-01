<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Facades\Cashier;
use Illuminate\Support\Facades\Session;

class AnnouncementController extends Controller
{
    
    protected $rules = [
        'title' => 'required | max:30',
        'description' => 'required | min:100',
        'price' => 'required | numeric',
    ];
    
    protected $messages = [
        'required' => "Il campo è richiesto",
        'min' => 'Il campo è troppo corto',
        'numeric' => 'Il campo deve contenere solo numeri',
    ];
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
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('announcement.index', compact('announcements'));
    }
    
    public function edit(Announcement $announcement)
    {
        return view('announcement.edit', compact('announcement'));
    }
    
    public function update(Request $request, Announcement $announcement)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:30'],
            'description' => ['required', 'min:100'],
            'price' => ['required', 'numeric'],
        ], $this->messages);
        
        $announcement->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
        ]);
        
        $announcement->is_accepted = null;
        $announcement->save();
        
        return redirect(route('announcement_index'))->with('message', 'Annuncio modificato correttamente! In attesa di revisione.');
    }
    
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect(route('announcement_index'))->with('message', 'Annuncio correttamente cancellato!');
    }
    
    public function indexEditAnnouncement(){
        $user = Auth::user();
        $announcements = Announcement::where('user_id', $user->id)->where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('announcement.indexEdit', compact('announcements'));
    }
}
