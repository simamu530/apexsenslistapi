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
            $table->string('チーム');
            $table->string('名前');
            $table->integer('DPI');
            $table->decimal('マウス感度', $precision = 4, $scale = 2);
            $table->decimal('倍率感度', $precision = 4, $scale = 2);
            $table->integer('Hz')->default(0);
            $table->integer('視野角')->default(0);
            $table->string('マウス')->default(0);
            $table->string('モニター')->default(0);
            $table->string('GPU')->default(0);
            $table->string('解像度')->default(0); //入力しやすいようにしたい(****×****)
            $table->string('マウスパッド')->default(0);
            $table->string('キーボード')->default(0);
            $table->string('ヘッドセット')->default(0);
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
