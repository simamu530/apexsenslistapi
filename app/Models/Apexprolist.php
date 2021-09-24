<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apexprolist extends Model
{
    use HasFactory;

    protected $guarded = array('id');

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
}
