<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apexprolist extends Model
{
    use HasFactory;

    protected $fillable = array(
        'id',
        'team',
        'name',
        'dpi',
        'mousesens',
        'multisens',
        'hz',
        'fov',
        'mouse',
        'monitor',
        'gpu',
        'resolution',
        'mousepad',
        'keyboard',
        'headset'
    );

    protected $casts = [
        'mousesens' => 'double',
        'multisens' => 'double',
    ];

    public static $rules = array(
        'team' => 'required',
        'name' => 'required',
        'dpi' => 'required',
        'mousesens' => 'required',
        'multisens' => 'required',
        'hz' => 'required',
        'fov' => 'required',
        'mouse' => 'required',
        'monitor' => 'required',
        'gpu' => 'required',
        'resolution' => 'required',
        'mousepad' => 'required',
        'keyboard' => 'required',
        'headset' => 'required',
    );
    protected $keyType = 'string';
    public $incrementing = false;
}
