@extends('layouts.homelayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> <h1>{{ $projekt->title }}</h1> </div>

                    <div class="panel-body">

                        <h3 class="abgabe">Zeitraum für das gesamte Projekt: <span></span></h3>

                        <p>Die verschiedenen Phasen können sich teilweise überschneiden. Aber soviel Zeit sollte eingeplant werden:

                        <ul>

                            <li class="gliederung">Gliederungerstellung: <span></span></li>

                            <li class="recherche">Recherche: <span></span></li>

                            <li class="schreibphase">Schreiben: <span></span></li>

                            <li class="korrektur">Korrekturen: <span></span></li>

                            <li class="drucken">Drucken: <span></span></li>

                        </ul>


                        <hr />

                        <p>Eingegebene Daten</p>

                                <ul>
                                    <li class="startdate">
                                        Beginn: <span>{{ $projekt->Startdatum }}</span>
                                    </li>
                                    <li class="enddate">
                                        Abgabe: <span>{{ $projekt->Finalisierungsdatum }}</span>
                                    </li>
                                    <li class="seiten">
                                        Erwartete Seitenanzahl: {{ $projekt->seitenanzahl }}
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