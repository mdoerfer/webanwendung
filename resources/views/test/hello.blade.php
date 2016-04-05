<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
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
        </div>
    </div>
</div>
</body>
</html>
