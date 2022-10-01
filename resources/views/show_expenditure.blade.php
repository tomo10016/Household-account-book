<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show Expenditure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
       
    <body>
        <h3>支出</h3>
        <div class='expenditure_list'>
            @foreach ($expenditures as $expenditure)
                <div class="expenditure">
                    <p class="id">No.{{ $expenditure->id }}</p>
                    <p class="date">日付：{{ $expenditure->date }}</p>
                    <p class="nominal">名目：{{ $expenditure->nominal }}</p>
                    <p class="bigcategory">大カテゴリ：{{ $expenditure->bigcategory_id }}</p>
                    <p class="smallcategory">小カテゴリ：{{ $expenditure->smallcategory_id }}</p>
                    <p class="money">金額：{{ $expenditure->money }}円</p>
                    <p class="shop">購入店舗：{{ $expenditure->shop }}</p>
                    <p class="method">支払方法：{{ $expenditure->method_id }}</p>
                    <p class="edit"><a href="/expenditures/{{ $expenditure->id }}/edit_expenditure">編集</a></p>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $expenditures->links() }}
        </div>
        <div class="back">[<a href="/show">戻る</a>]</div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
