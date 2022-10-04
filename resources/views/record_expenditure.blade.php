@extends('layouts.app')

@section('content')
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
                <input type="date" name="expenditure[date]" value="{{ old('expenditure.date') }}">
                <p class="date_error" style="color:red">{{ $errors->first('expenditure.date') }}</p>
            </div>
            <div class="items">
                <h3>名目(財やサービス)</h3>
                <input type="text" name="expenditure[nominal]" placeholder="名目" value="{{ old('expenditure.nominal') }}">
                <p class="item_error" style="color:red">{{ $errors->first('expenditure.nominal') }}</p>
            </div>
            <div class="categories">
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
                <input type="number" step="1" name="expenditure[money] "placeholder="金額" value={{ old('expenditure.money') }}>円
                <p class="price_error" style="color:red">{{ $errors->first('expenditure.money') }}</p>
            <div class="shop">
                <h3>購入店舗</h3>
                <input type="text" name="expenditure[shop]" placeholder="購入店舗" value={{ old('expenditure.shop') }}>
                <p class="shop_error" style="color:red">{{ $errors->first('expenditure.shop') }}</p>
            </div>
            <div class="methods">
                <h3>支払方法</h3>
                @foreach ($methods as $method)
                    <label for="method"><input type="checkbox" name="expenditure[method_id]" value="{{ $method->id}}">{{ $method->name }}</label>
                @endforeach
                <p class="method_error" style="color:red">{{ $errors->first('expenditure.method.id') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back"><a href="/record">戻る</a></div>
        <div class="backtop"><a href="/">トップに戻る</a></div>
    </body>
</html>
@endsection