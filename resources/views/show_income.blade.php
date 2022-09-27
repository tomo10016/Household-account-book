<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show Income</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
    <body>
        <h3>収入</h3>
        <div class="incomes">
            @foreach ($incomes as $income)
                <div class="income">
                    <p class="year">{{ $income->year }}年</p>
                </div>
            @endforeach
        </div>
        <div class="back">[<a href="/show">戻る</a>]</div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
