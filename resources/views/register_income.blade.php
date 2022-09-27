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
        <div class="date">
            <h3>日付</h3>
            <input type="text" placeholder="年">年
            <input type ="text" placeholder="月">月
            <input type="text" placeholder="日">日
        </div>
        <div class="category">
            <h3>カテゴリ</h3>
            <label for="salary"><input type="checkbox" name="expenditure[]">給与・報酬</label>
            <label for="official"><input type="checkbox" name="expenditure[]">公的年金</label>
            <label for="private"><input type="checkbox" name="expenditure[]">私的年金</label>
        </div>
        <div class="price">
            <h3>金額</h3>
            <input type="text" placeholder="値段">円
        </div>
        <input type="submit" value="保存"/>
        <div class="back">[<a href="/register">戻る</a>]</div>
        <div class="back">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
