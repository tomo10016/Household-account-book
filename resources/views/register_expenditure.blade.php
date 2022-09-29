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
            <input type="number" step="1" min="1900" name="expenditure[year]" placeholder="年">年
            <input type ="number" step="1" min="1" max="12" name="expenditure[month]" placeholder="月">月
            <input type="number" step="1" min="1" max="31" name="expenditure[day]" placeholder="日">日
        </div>
        <div class="items">
            <h3>名目(財やサービス)</h3>
            <input type="text" name="expenditure[nominal]" placeholder="名目"/>
        </div>
        <div class="category">
            <h3>カテゴリ</h3>
            <div class="fixed">
                <p><label for="fixed"><input type="checkbox" name="expenditure[bigcategory]">固定費</label></p>
                    <label for="residence"><input type="checkbox" name="expenditure[smallcategory]">住居費</label>
                    <label for="utility"><input type="checkbox" name="expenditure[smallcategory]">水道光熱費</label>
                    <label for="communication"><input type="checkbox" name="[smallcategory]">通信費</label>
                    <label for="insurance"><input type="checkbox" name="expenditure[smallcategory]">保険料</label>
            </div>
            <div class="variable">
                <p><label for="variable"><input type="checkbox" name="expenditure[bigcategory]">変動費</label></p>
                    <label for="food"><input type="checkbox" name="expenditure[smallcategory]">食費</label>
                    <label for="daily"><input type="checkbox" name="expenditure[smallcategory]">日用品費</label>
                    <label for="clothes"><input type="checkbox" name="expenditure[smallcategory]">被服費</label>
                    <label for="beauty"><input type="checkbox" name="expenditure[smallcategory]">美容費</label>
                    <label for="entertainment"><input type="checkbox" name="expenditure[smallcategory]">交際費</label>
                    <label for="hobby"><input type="checkbox" name="expenditure[smallcategory]">趣味費</label>
                    <label for="transportation"><input type="checkbox" name="expenditure[smallcategory]">交通費</label>
                    <label for="education"><input type="checkbox" name="expenditure[smallcategory]">教育費</label>
                    <label for="medica"><input type="checkbox" name="expenditure[smallcategory]">医療費</label>
                    <label for="special"><input type="checkbox" name="expenditure[smallcategory]">特別費</label>
                    <label for="food"><input type="checkbox" name="expenditure[smallcategory]">雑費</label>
            </div>
        </div>
        <div class="price">
            <h3>金額</h3>
            <input type="number" step="1" name="expenditure[money] "placeholder="値段">円
        <div class="shop">
            <h3>購入店舗</h3>
            <input type="text" name="expenditure[shop]" placeholder="購入店舗">
        </div>
        <div class="method">
            <h3>支払方法</h3>
            <label for="cash"><input type="checkbox" name="expenditure[method]">現金</label>
            <label for="credit"><input type="checkbox" name="expenditure[method]">クレジットカード</label>
            <label for="smartphone"><input type="checkbox" name="expenditure[method]">スマホ決済</label>
        </div>
        <input type="submit" value="保存"/>
        <div class="back">[<a href="/register">戻る</a>]</div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
