<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration of income</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <body/>
        <h2>収入の登録</h2>
        <form action="/incomes" method="POST">
            {{ csrf_field() }}
        <div class="date">
            <h3>日付</h3>
            <input type="date" name="income[date]">
        </div>
        <div class="category">
            <h3>カテゴリ</h3>
            <label for="salary"><input type="checkbox" name="income[category_id]" value="1">給与・報酬</label>
            <label for="official"><input type="checkbox" name="income[category_id]" value="2">公的年金</label>
            <label for="private"><input type="checkbox" name="income[category_id]" value="3">私的年金</label>
        </div>
        <div class="price">
            <h3>金額</h3>
            <input type="number" name="income[money]" placeholder="値段">円
        </div>
        <input type="submit" value="保存"/>
        <div class="back">[<a href="/register">戻る</a>]</div>
        <div class="back">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
