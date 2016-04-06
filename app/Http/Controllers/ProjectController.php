<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projekte = DB::table('pojects')->get();
        return view('projekte.index', compact('projekte'));
    }

    public function anlegen()
    {
        return view('projekte.anlegen');
    }
}
