<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apexprolist extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'チーム' => 'required',
        '名前' => 'required',
        'DPI' => 'required',
        'マウス感度' => 'required',
        '倍率感度' => 'required',
        'Hz' => 'required',
        '視野角' => 'required',
        'マウス' => 'required',
        'モニター' => 'required',
        'GPU' => 'required',
        '解像度' => 'required',
        'マウスパッド' => 'required',
        'キーボード' => 'required',
        'ヘッドセット' => 'required',
    );
}
