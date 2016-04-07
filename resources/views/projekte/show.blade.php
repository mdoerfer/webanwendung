@extends('layouts.homelayout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>{{ $projekt->title }}</h1>
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
                                    <li>
                                        Fertigstellung der Gliederung: {{ $projekt->Gliederung }}
                                    </li>
                                </ul>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop