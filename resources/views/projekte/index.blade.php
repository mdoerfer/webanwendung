@extends('layouts.homelayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h1>Alle Projekte</h1> </div>

                    <div class="panel-body">

    @foreach ($projekte as $projekt)
    <div>
        <h3>
            <a href="/projekte/ {{ $projekt->id }}">{{ $projekt->title }}</a>
        </h3>

    </div>
    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop