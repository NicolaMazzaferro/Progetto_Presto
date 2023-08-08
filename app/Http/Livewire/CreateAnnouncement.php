<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{

    public $title;
    public $description;
    public $price;

    public function store(){
        $announcement = Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price
        ]);

        session()->flash('message', 'Annuncio caricato!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }


}
