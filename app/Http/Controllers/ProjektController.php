<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjektController extends Controller
{
    public function index()
    {
        return view('projekte.index');
    }
}
