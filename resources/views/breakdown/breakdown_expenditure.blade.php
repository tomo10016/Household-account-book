@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Breakdown Expenditure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
    </head>
    
    <body>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        
        <script>
            new Vue ({
                el: '#app',
                data: {
                    sum_price: [],
                    years: [],
                    chart: null
                },
                methods: {
                    getYears() {
                        fetch('/ajax/expenditures/years')
                            .then(response => response.json())
                            .then(data => this.years = data);
                    },
                    getExpenditures() {
                        fetch('/ajax/expenditures/year=' + this.year)
                            .then(response => response.json())
                            .then(data => {
                                if(this.chart) {
                                    this.chart.destroy():
                                }
                                
                                const smallPrices = _.groupBy(data, 'smallcategory');
                                const sum_price = _.maop(smallPrices, smallcategoryPrices => {
                                    return _.sumBy(smallcategoryPrices, 'money');
                                });
                                const SmallCategory = _.keys(smallPrices);
                                
                                const ctx = document.getElementById('chart').getContect('2d')
                                )
            })
        </script>
    </body>
</html>
@endsection