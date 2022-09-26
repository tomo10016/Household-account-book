<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration of items to purchase</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <body/>
    <h2>支出の登録</h2>
        <div class="date">
            <h3>日付</h3>
            <input type="text" placeholder="日付">
        </div>
         <div class="items">
            <h3>名目(財やサービス)</h3>
            <input type="text" placeholder="名目"/>
        </div>
        <div class="category">
            <h3>カテゴリ</h3>
            <label for="fixed"><input type="checkbox" name="expenditure[]">固定費</label>
            <label for="variable"><input type="checkbox" name="expenditure[]">変動費</label>
        </div>
        <div class="price">
            <h3>金額</h3>
            <input type="text" placeholder="値段">円
        <div class="shop">
            <h3>購入店舗</h3>
            <input type="text" placeholder="購入店舗">
        </div>
        <div class="method">
            <h3>支払方法</h3>
            <label for="cash"><input type="checkbox" name="payment_method[]">現金</label>
            <label for="credit"><input type="checkbox" name="payment_method[]">クレジットカード</label>
            <label for="smartphone"><input type="checkbox" name="payment_method[]">スマホ決済</label>
        </div>
        <div class="back">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
