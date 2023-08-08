<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{

    public $title;
    public $description;
    public $price;

    // Validation - Nicola
    protected $rules = [
        'title' => 'required | min:4',
        'description' => 'required | min:8',
        'price' => 'required | numeric',
    ];

    protected $messages = [
        'required' => "Il campo è richiesto",
        'min' => 'Il campo è troppo corto',
        'numeric' => 'Il campo deve contene solo numeri',
    ];

    public function store(){

        $this->validate();

        $announcement = Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price
        ]);
        
        // messagio conferma e pulizia form - Nicola
        session()->flash('message', 'Annuncio caricato!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }


}
