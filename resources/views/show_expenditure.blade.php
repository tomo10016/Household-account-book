@extends('layouts.app')

@section('content')
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
                    <p class="date">日付：{{ $expenditure->date }}</p>
                    <p class="nominal">名目：{{ $expenditure->nominal }}</p>
                    <p class="bigcategory">大カテゴリ：{{ $expenditure->bigcategory->name }}</p>
                    <p class="smallcategory">小カテゴリ：{{ $expenditure->smallcategory->name }}</p>
                    <p class="money">金額：{{ $expenditure->money }}円</p>
                    <p class="payer">支払い相手：{{ $expenditure->payer }}</p>
                    <p class="method">支払方法：{{ $expenditure->method->name }}</p>
                    <p class="edit"><a href="/expenditures/{{ $expenditure->id }}/edit_expenditure">編集</a></p>
                    <form action="/expenditures/{{ $expenditure->id }}/delete_expenditure" id="form_{{ $expenditure->id }}" method="post" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $expenditures->links() }}
        </div>
        <div class="register_exoenditure"><a href="/record/record_expenditure">支出を記録する</a></div>
        <div class="back"><a href="/show">戻る</a></div>
        <div class="backtop"><a href="/">トップに戻る</a></div>
    </body>
</html>
@endsection