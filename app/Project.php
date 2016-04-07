<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'pojects';

    protected $fillable = [
        'id',
        'title'
    ];
}
