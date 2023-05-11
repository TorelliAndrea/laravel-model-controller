<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
    <main class="bg-light">
        <div class="container">
            <ul>
                @foreach ($movies as $movie)
                    <li>{{$movie->id}} - {{$movie->title}} - {{$movie->vote}} - {{$movie->original_title}} - {{$movie->nationality}} - {{$movie->date}}</li>
                @endforeach
            </ul>
        </div>
    </main>
</body>

</html>
