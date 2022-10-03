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
        <div class="income_list">
            @foreach ($incomes as $income)
                <div class="income">
                    <p class="date">日付：{{ $income->date }}</p>
                    <p class="category">カテゴリー：{{ $income->category->name }}</p>
                    <p class="money">金額：{{ $income->money }}円</p>
                    <p class="edit"><a href="/incomes/{{ $income->id }}/edit_income">編集</a></p>
                    <form action="/incomes/{{ $income->id }}/delete_income" id="form_{{ $income->id }}" method="post" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $incomes->links() }}
        </div>
        <div class="register_income"><a href="/register/register_income">収入を記録する</a></div>
        <div class="back"><a href="/show">戻る</a></div>
        <div class="backtop"><a href="/">トップに戻る</a></div>
    </body>
</html>
