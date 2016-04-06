<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function index()
    {
        $projekte = DB::table('projects')->get();
        return view('projekte.index', compact('projekte'));
    }
}
