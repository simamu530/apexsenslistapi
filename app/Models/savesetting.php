<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savesetting extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $casts = [
        'mousesens' => 'double',
        'multisens' => 'double',
    ];

    public static $rules = array(
        'game_title' => 'required',
        'mouse' => 'required',
        'dpi' => 'required',
        'mouse_sens' => 'required',
        'multi_sens' => 'required',
        'hz' => 'required',
        'mousepad' => 'required',
        'keyboard' => 'required',
        'fov' => 'required',
        'resolution' => 'required',
    );
}
