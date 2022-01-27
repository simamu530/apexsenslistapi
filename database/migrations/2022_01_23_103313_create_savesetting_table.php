<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavesettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savesettings', function (Blueprint $table) {
            $table->id();
            $table->string('game_title');
            $table->string('mouse')->default(0);
            $table->integer('dpi');
            $table->double('mouse_sens');
            $table->double('multi_sens');
            $table->integer('hz')->default(0);
            $table->string('mouse_pad')->default(0);
            $table->string('keyboard')->default(0);
            $table->string('res')->default(0);
            $table->integer('fov')->default(0);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('savesetting');
    }
}
