<?php

namespace App\Http\Controllers;

use App\Project;
use DB;

use Request;

use Carbon\Carbon;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projekte = Project::latest()->get();
        return view('projekte.index', compact('projekte'));
    }

    public function show($id)
    {
        $projekt = Project::findOrFail($id);
        return view('projekte.show', compact('projekt'));
    }

    public function create()
    {
        return view('projekte.anlegen');
    }

    public function store()
    {
        $input = Request::all();
        $input['published_at']= Carbon::now();

        Project::create($input);

        return redirect('projekte');
    }
}
