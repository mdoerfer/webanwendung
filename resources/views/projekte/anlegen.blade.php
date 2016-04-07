@extends('layouts.homelayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Neues Projekt anlegen</h1></div>

                    <div class="panel-body">
                        <div>

                            {!! Form::open(['url'=>'projekte']) !!}

                            <div class="form-group">

                                {!! Form::label('title', 'Titel der Arbeit:') !!}

                                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                            </div>

                            <div class="form-group">

                                {!! Form::label('seitenanzahl', 'Seitenzahl der Arbeit:') !!}

                                {!! Form::input('number','seitenanzahl', null, ['class' => 'form-control']) !!}

                            </div>


                            <div class="form-group">

                                {!! Form::label('Startmonat', 'Startdatum:') !!}
                                {!! Form::input('date', 'Startdatum', null, ['class' => 'form-control']) !!}


                            </div>

                            <div class="form-group">

                                {!! Form::label('Finalisierungsmonat', 'Finalisierungsdatum / Abgabe:') !!}

                                {!! Form::input('date', 'Finalisierungsdatum', null, ['class' => 'form-control']) !!}
                            </div>

                            <div>
                                {!! Form::submit('Projekt hinzufügen', ['class' => 'btn btn-primary form-control']) !!}
                            </div>

                            {!! Form::close() !!}

                         </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection