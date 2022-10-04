@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Finance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <body>
        <h2>家計簿</h2>
        <div class="record">
            <a href="/record">家計簿を付ける</a>
        </div>
        <div class="show">
            <a href="/show">家計簿を見る</a>
        </div>
    </body>
</html>
@endsection