@extends('layouts.homelayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
    <h1>Alle Projekte</h1>

    @foreach ($projekte as $projekt)
    <div>
        <p>{{ $projekt->title }}</p>
        <p>Muss finalisiert werden am:</p>
        <p>{{ $projekt->Finalisierungsdatum }}</p>
    </div>
    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop