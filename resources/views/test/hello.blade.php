@extends('testlayout')

@section('content')



        <div class="title">Here you go</div>

        <div>
            <h2>Leere Array wird durch Blade erkannt</h2>
            @if (empty($leereArray))
                Es gibt keine Daten.
            @endif
        </div>
        <div>
            <h2>Datenausgabe via PHP</h2>
            <?php foreach ($array as $person): ?>
            <li><?= $person; ?></li>
            <?php endforeach; ?>
        </div>
        <div>
            <h2>Datenausgabe via Blade</h2>
            @foreach ($array as $person)
            <li>{{$person}}</li>
            @endforeach
            <button>Knopf</buton>

@stop
