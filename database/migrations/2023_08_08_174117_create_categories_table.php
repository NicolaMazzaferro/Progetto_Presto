<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    //Categorie Predefinite - Nicola
    
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')-> default ('');
            
            $table->timestamps();
        });
        
        /* $categories = ['Elettronica','Mobili','Abbigliamento','Musica','Libri','Casa','Motore','Alimentari','Giochi','Sport'];
        
        foreach($categories as $category) {
            Category::create(['name' => $category]);
        }  */
    }
    public function down(): void{Schema::dropIfExists('categories');}
};
