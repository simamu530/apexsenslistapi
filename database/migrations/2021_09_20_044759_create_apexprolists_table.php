<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApexprolistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apexprolists', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('name');
            $table->integer('dpi');
            $table->decimal('mousesens', $precision = 4, $scale = 2);
            $table->decimal('multisens', $precision = 4, $scale = 2);
            $table->integer('hz')->default(0);
            $table->integer('fov')->default(0);
            $table->string('mouse')->default(0);
            $table->string('monitor')->default(0);
            $table->string('gpu')->default(0);
            $table->string('resolution')->default(0); //入力しやすいようにしたい(****×****)
            $table->string('mousepad')->default(0);
            $table->string('keyboard')->default(0);
            $table->string('headset')->default(0);
            // $table->一覧表示に外国人と日本人でジャンル分けできるようにして、選んだだけのデータを抽出して表示できるようにしたい。
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
        Schema::dropIfExists('apexprolists');
    }
}
