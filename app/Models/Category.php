<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Colonna Category - Nicola

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','nameIt','nameEs','nameEn'];


    // Relazione 1-N - Nicola
    public function announcements() {
        return $this->hasMany(Announcement::class);
    }
}
