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
        <form action="/expenditures" method="POST">
                {{ csrf_field() }}
            <div class="date">
                <h3>日付</h3>
                <input type="date" name="expenditure[date]">
            </div>
            <div class="items">
                <h3>名目(財やサービス)</h3>
                <input type="text" name="expenditure[nominal]" placeholder="名目"/>
            </div>
            <div class="categories">
                <h3>カテゴリ</h3>
                <div class="bigcategories">
                    @foreach ($bigcategories as $bigcategory)
                        <label for="bigcategory"><input type="checkbox" name="expenditure[bigcategory_id]" value="{{ $bigcategory->id}}">{{ $bigcategory->name }}</label>
                    @endforeach
                </div>
                <div class="smallcategories">
                    <label for="residence"><input type="checkbox" name="expenditure[smallcategory_id]" value="1">住居費</label>
                    <label for="utility"><input type="checkbox" name="expenditure[smallcategory_id]" value="2">水道光熱費</label>
                    <label for="communication"><input type="checkbox" name="expenditure[smallcategory_id]" value="3">通信費</label>
                    <label for="insurance"><input type="checkbox" name="expenditure[smallcategory_id]" value="4">保険料</label>
                    <label for="food"><input type="checkbox" name="expenditure[smallcategory_id]" value="5">食費</label>
                    <label for="daily"><input type="checkbox" name="expenditure[smallcategory_id]" value="6">日用品費</label>
                    <label for="clothes"><input type="checkbox" name="expenditure[smallcategory_id]" value="7">被服費</label>
                    <label for="beauty"><input type="checkbox" name="expenditure[smallcategory_id]" value="8">美容費</label>
                    <label for="entertainment"><input type="checkbox" name="expenditure[smallcategory_id]" value="9">交際費</label>
                    <label for="hobby"><input type="checkbox" name="expenditure[smallcategory_id]" value="10">趣味費</label>
                    <label for="transportation"><input type="checkbox" name="expenditure[smallcategory_id]" value="11">交通費</label>
                    <label for="education"><input type="checkbox" name="expenditure[smallcategory_id]" value="12">教育費</label>
                    <label for="medica"><input type="checkbox" name="expenditure[smallcategory_id]" value="13">医療費</label>
                    <label for="special"><input type="checkbox" name="expenditure[smallcategory_id]" value="14">特別費</label>
                    <label for="food"><input type="checkbox" name="expenditure[smallcategory_id]" value="15">雑費</label>
                </div>
            </div>
            <div class="price">
                <h3>金額</h3>
                <input type="number" step="1" name="expenditure[money] "placeholder="金額">円
            <div class="shop">
                <h3>購入店舗</h3>
                <input type="text" name="expenditure[shop]" placeholder="購入店舗">
            </div>
            <div class="method">
                <h3>支払方法</h3>
                <label for="cash"><input type="checkbox" name="expenditure[method_id]" value="1">現金</label>
                <label for="credit"><input type="checkbox" name="expenditure[method_id]" value="2">クレジットカード</label>
                <label for="smartphone"><input type="checkbox" name="expenditure[method_id]" value="3">スマホ決済</label>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/register">戻る</a>]</div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
