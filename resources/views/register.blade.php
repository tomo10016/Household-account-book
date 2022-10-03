<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keep a household account</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <h3>家計簿を付ける</h3>
        <div class="register_income">
            <a href="/register/register_income">収入</a>
        </div>
        <div class="register_expenditure">
            <a href="/register/register_expenditure">支出</a>
        </div>
        <div class="backtop"><a href="/">戻る</a></div>
    </body>
</html>
