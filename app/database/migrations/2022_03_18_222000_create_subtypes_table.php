<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->integer('types_id')->unsigned();
            $table->foreign('types_id')->references('id')->on('types');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('subtypes')->insert([
            ['name' => 'Aqua','types_id'=> 1],
            ['name' => 'Beast','types_id'=> 1],
            ['name' => 'Beast-Warrior','types_id'=> 1],
            ['name' => 'Cyberse','types_id'=> 1],
            ['name' => 'Dinosaur','types_id'=> 1],
            ['name' => 'Divine-Beast','types_id'=> 1],
            ['name' => 'Dragon','types_id'=> 1],
            ['name' => 'Fairy','types_id'=> 1],
            ['name' => 'Fiend','types_id'=> 1],
            ['name' => 'Fish','types_id'=> 1],
            ['name' => 'Insect','types_id'=> 1],
            ['name' => 'Machine','types_id'=> 1],
            ['name' => 'Plant','types_id'=> 1],
            ['name' => 'Psychic','types_id'=> 1],
            ['name' => 'Pyro','types_id'=> 1],
            ['name' => 'Reptile','types_id'=> 1],
            ['name' => 'Rock','types_id'=> 1],
            ['name' => 'Sea Serpent','types_id'=> 1],
            ['name' => 'Spellcaster','types_id'=> 1],
            ['name' => 'Thunder','types_id'=> 1],
            ['name' => 'Warrior','types_id'=> 1],
            ['name' => 'Winged Beast','types_id'=> 1],
            ['name' => 'Wyrm','types_id'=> 1],
            ['name' => 'Zombie','types_id'=> 1],
            ['name' => 'Normal','types_id'=> 2],
            ['name' => 'Quick Play','types_id'=> 2],
            ['name' => 'Field','types_id'=> 2],
            ['name' => 'Ritual','types_id'=> 2],
            ['name' => 'Normal','types_id'=> 3],
            ['name' => 'Normal','types_id'=> 3],
            ['name' => 'Continuous','types_id'=> 3],
            ['name' => 'Equip','types_id'=> 3],
            ['name' => 'Field','types_id'=> 3],
            ['name' => 'Counter','types_id'=> 3]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtypes');
    }
}
