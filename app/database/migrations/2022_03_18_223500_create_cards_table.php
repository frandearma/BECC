<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 256);
            $table->string('image', 256);
            $table->boolean('firstEdition');
            $table->double('price')->nullable();
            $table->string('code', 100)->nullable();
            $table->integer('subtypes_id')->unsigned();
            $table->foreign('subtypes_id')->references('id')->on('subtypes')->constrained('subtypes_id');
            $table->integer('atk')->nullable();
            $table->integer('def')->nullable();
            $table->integer('stars')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('cards')->insert([
            ['id' => 1, 'name' => 'Dark Magician','description'=>'The ultimate wizard in terms of attack and defense.', 'price' => '230', 'firstEdition' => true, 'image'=>'https://static.wikia.nocookie.net/yugiohenespanol/images/5/58/Foto_mago_oscuro.jpg', 'atk'=>2500,'def'=>2100,'stars'=>7, 'subtypes_id' => '1', 'code'=>46986414],
            ['id' => 2, 'name' => 'Summoned Skull','description'=>'A fiend with dark powers for confusing the enemy. Among the Fiend-Type monsters, this monster boasts considerable force.', 'price' => '233', 'firstEdition' => true, 'image'=>'https://static.wikia.nocookie.net/yugiohenespanol/images/a/a2/Foto_cr%C3%A1neo_convocado.jpg', 'atk'=>2500,'def'=>1200,'stars'=>6, 'subtypes_id' => '2', 'code'=>70781052]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
