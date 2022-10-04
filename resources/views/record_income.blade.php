@extends('layouts.app')

@section('content')
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
                <input type="date" name="income[date]" value="{{ old('income.date') }}">
                <p class="date_error" style="color:red">{{ $errors->first('income.date') }}</p>
            </div>
            <div class="categories">
                <h3>カテゴリ</h3>
                @foreach ($categories as $category)
                    <label for="category"><input type="checkbox" name="income[category_id]" value="{{ $category->id }}">{{ $category->name }}</label>
                @endforeach
                <p class="category_error" style="color:red">{{ $errors->first('income.category_id') }}</p>
            </div>
            <div class="price">
                <h3>金額</h3>
                <input type="number" name="income[money]" placeholder="値段" value="{{ old('income.money') }}">円
                <p class="money_error" style="color:red">{{ $errors->first('income.money') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back"><a href="/record">戻る</a></div>
        <div class="back"><a href="/">トップに戻る</a></div>
    </body>
</html>
@endsection