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
        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price
        ]);

        
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }


}
