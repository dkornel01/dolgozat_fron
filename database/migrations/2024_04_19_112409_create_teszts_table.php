<?php

use App\Models\teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->integer('helyes')->default(1);
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });
        teszt::create([
            'kerdes'=>'melyik kutya a legkisebb',
            'v1'=>'Bolonyez',
            'v2'=>'Dog',
            'v3'=>'Vizsla',
            'v4'=>'Dalmata',
            'kategoriaId'=>1
        ]);
        teszt::create([
            'kerdes'=>'melyik kutya a legnagyobb',
            'v1'=>'Bolonyez',
            'v2'=>'Dog',
            'v3'=>'Vizsla',
            'v4'=>'Dalmata',
            'helyes'=>2,
            'kategoriaId'=>1
        ]);
        teszt::create([
            'kerdes'=>'melyik szelektívbe való a papír',
            'v1'=>'kék',
            'v2'=>'piros',
            'v3'=>'szürke',
            'v4'=>'sárga',
            'helyes'=>1,
            'kategoriaId'=>2
        ]);
        teszt::create([
            'kerdes'=>'melyik komposztálható',
            'v1'=>'fém',
            'v2'=>'nagy ágak',
            'v3'=>'zöldség',
            'v4'=>'diófalevél',
            'helyes'=>3,
            'kategoriaId'=>2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
