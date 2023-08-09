<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{

    public $title;
    public $description;
    public $price;

    // Categoria - Nicola
    public $category;

    // Validation - Nicola
    protected $rules = [
        'title' => 'required | min:4',
        'description' => 'required | min:8',
        'price' => 'required | numeric',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => "Il campo è richiesto",
        'min' => 'Il campo è troppo corto',
        'numeric' => 'Il campo deve contene solo numeri',
    ];

    public function store(){

        $this->validate();
        
        // Store category - Nicola
        $category = Category::find($this->category); 

        // Relazione creazione annuncio con categoria relazionata
        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);

        // Relazione Announcement - utente loggato - Nicola
        Auth::user()->announcements()->save($announcement);

        // NON SERVE PIU' PERCHE' ABBIAMO ACCESSO AGLI ANNUNCI TRAMITE LA RELAZIONE CON LE CATEGORIE - Nicola

        // $announcement = Announcement::create([
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price
        // ]);
        
        // messagio conferma e pulizia form - Nicola
        session()->flash('message_announcement', 'Annuncio caricato!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
