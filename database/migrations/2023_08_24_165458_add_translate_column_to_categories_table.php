<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /* Run the migrations. */

    public function up(): void{Schema::table('categories', function (Blueprint $table) {
        $table->string('nameIt')->nullable();
        $table->string('nameEn')->nullable();
        $table->string('nameEs')->nullable();
    });
    
    $categories = [
        ['nameIt' => 'Elettronica', 'nameEn' => 'Electronics', 'nameEs' => 'Electrónica'],
        ['nameIt' => 'Mobili', 'nameEn' => 'Furniture', 'nameEs' => 'Muebles'],
        ['nameIt' => 'Abbigliamento', 'nameEn' => 'Clothing', 'nameEs' => 'Ropa'],
        ['nameIt' => 'Musica', 'nameEn' => 'Music', 'nameEs' => 'Música'],
        ['nameIt' => 'Libri', 'nameEn' => 'Books', 'nameEs' => 'Libros'],
        ['nameIt' => 'Casa', 'nameEn' => 'Home', 'nameEs' => 'Hogar'],
        ['nameIt' => 'Motore', 'nameEn' => 'Automotive', 'nameEs' => 'Automoción'],
        ['nameIt' => 'Alimentari', 'nameEn' => 'Groceries', 'nameEs' => 'Comestibles'],
        ['nameIt' => 'Giochi', 'nameEn' => 'Games', 'nameEs' => 'Juegos'],
        ['nameIt' => 'Sport', 'nameEn' => 'Sports', 'nameEs' => 'Deportes'],
    ];
    
    foreach ($categories as $category) {
        Category::create([
            'nameIt' => $category['nameIt'],
            'nameEn' => $category['nameEn'],
            'nameEs' => $category['nameEs'],
        ]);
    }
}

/* 
Reverse the migrations. */

public function down(): void{Schema::table('categories', function (Blueprint $table) {$table->dropColumn('nameIt');$table->dropColumn('nameEs');$table->dropColumn('nameEn');});}
};