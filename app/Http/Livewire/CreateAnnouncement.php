<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $price;

    // Categoria - Nicola
    public $category;
    public $images = [];
    public $temporary_images;


    // Validation - Nicola
    protected $rules = [
        'title' => 'required | min:4',
        'description' => 'required | min:8',
        'price' => 'required | numeric',
        'category' => 'required',
        'images.*'=> 'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];

    protected $messages = [
        'required' => "Il campo è richiesto",
        'min' => 'Il campo è troppo corto',
        'numeric' => 'Il campo deve contene solo numeri',
        '$temporary_images.required' => "L'immagine è richiesta",
        '$temporary_images.*.image' => "I file devono essere immagini",
        '$temporary_images.*.max' => "L'immagine dev'essere massimo di 1mb",
        'images.image' => "L'immagine dev'essere un'immagine",
        'images.max' => "L'immagine dev'essere massimo di 1mb",
    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }
    public function removeImages($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }



    public function store(){

        $this->validate();
        
        // Store category - Nicola
        // $category = Category::find($this->category); 
        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if(count($this->images)){
            foreach($this->images as $image){
                $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
            }
        }
        // Relazione creazione annuncio con categoria relazionata
        // $announcement = $category->announcements()->create([
        //     'title'=>$this->title,
        //     'description'=>$this->description,
        //     'price'=>$this->price,
        // ]);

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
