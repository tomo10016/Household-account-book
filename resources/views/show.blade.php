<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h3>家計簿を見る</h3>
        <div class="income_show">
            <a href="/show/show_income">収入</a>
        </div>
        <div class="expenditure_show">
            <a href="/show/show_expenditure">支出</a>
        </div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
