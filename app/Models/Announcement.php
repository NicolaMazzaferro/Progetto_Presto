<?php

namespace App\Models;

use App\Models\Image;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;
    protected $fillable =['title','description','price'];
    
    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$this->category,
        ];

        // Customize array...

        return $array;
    }


    // Relazione 1-N - Nicola
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Relazione Announcements-User - Nicola
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }

    public static function toBeRejectCount(){
        return Announcement::where('is_accepted', false)->count();
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
