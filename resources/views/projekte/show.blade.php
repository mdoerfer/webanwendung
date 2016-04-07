@extends('layouts.homelayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h1>{{ $projekt->title }}</h1> </div>

                    <div class="panel-body">

                                <ul>
                                    <li>
                                        Erwartete Seitenanzahl: {{ $projekt->seitenanzahl }}
                                    </li>
                                    <li>
                                        Beginn: {{ $projekt->Startdatum }}
                                    </li>
                                    <li>
                                        Abgabe: {{ $projekt->Finalisierungsdatum }}
                                    </li>
                                </ul>

                        <hr />

                         <a href="{{ url('/projekte/anlegen', $projekt->id) }}" class="btn btn-warning">Bearbeiten</a>

                        <hr />

                        {!! Form::open(['method' => 'DELETE', 'route'=>['project.destroy', $projekt->id]]) !!}
                        {!! Form::submit(' Löschen ', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

                        </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop