@extends('layouts.app')

@section('content')
    <h1>Alle Projekte</h1>

    @foreach ($projekte as $projekt)
    <div>
        <p>{{ $projekt->title }}</p>
        <p>Muss finalisiert werden am:</p>
        <p>{{ $projekt->Finalisierungsdatum }}</p>
    </div>
    @endforeach
@stop