@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit expenditure</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h3>No.{{ $expenditure->id }}</h3>
        <form action="/expenditures/{{ $expenditure->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="date">
                <h3>日付</h3>
                <input type="date" name="expenditure[date]" value="{{ $expenditure->date }}">
            </div>
            <div class="items">
                <h3>名目(財やサービス)</h3>
                <input type="text" name="expenditure[nominal]" placeholder="名目" value="{{ $expenditure->nominal }}"/>
            </div>
            <div class="category">
                <h3>カテゴリ</h3>
               <div class="bigcategories">
                    @foreach ($bigcategories as $bigcategory)
                        <label for="bigcategory"><input type="checkbox" name="expenditure[bigcategory_id]" value="{{ $bigcategory->id }}">{{ $bigcategory->name }}</label>
                    @endforeach
                    <p class="bigcategory_error" style="color:red">{{ $errors->first('expenditure.bigcategory_id') }}</p>
                </div>
                <div class="smallcategories">
                    @foreach ($smallcategories as $smallcategory)
                        <label for="smallcategory"><input type="checkbox" name="expenditure[smallcategory_id]" value="{{ $smallcategory->id }}">{{ $smallcategory->name }}</label>
                    @endforeach
                    <p class="smallcategory_error" style="color:red">{{ $errors->first('expenditure.smallcategory_id') }}</p>
                </div>
            </div>
            <div class="price">
                <h3>金額</h3>
                <input type="number" step="1" name="expenditure[money] "placeholder="金額" value="{{ $expenditure->money }}">円
            <div class="shop">
                <h3>支払い相手</h3>
                <input type="text" name="expenditure[payer]" placeholder="支払い相手" value="{{ $expenditure->payer }}">
            </div>
            <div class="method">
                <h3>支払方法</h3>
                @foreach ($methods as $method)
                    <label for="method"><input type="checkbox" name="expenditure[method_id]" value="{{ $method->id}}">{{ $method->name }}</label>
                @endforeach
            </div>
            <input type="submit" value="更新"/>
        </form>
        <div class="back">[<a href="/show/show_expenditure">戻る</a>]</div>
        <div class="backtop">[<a href="/">トップに戻る</a>]</div>
    </body>
</html>
@endsection