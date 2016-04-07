<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'pojects';

    protected $fillable = [
        'id',
        'title',
        'seitenanzahl',
        'Startdatum',
        'Gliederung',
        'Recherche',
        'Schreibphase',
        'Korrekturphase',
        'Verbesserung',
        'Druckerei',
        'Finalisierungsdatum'
    ];
}
