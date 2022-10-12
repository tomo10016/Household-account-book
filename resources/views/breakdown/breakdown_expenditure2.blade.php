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
        <h2>支出の内訳</h2>
        <div id="app" class="container p-3">
            <div class = "row">
                <div class="col-md-6">  
                    <canvas id="BreakdownExpenditureChart" width="50" height="50"></canvas>
                    
                    <div class = "form-group">
                        <label>年間支出</label>
                        <select class="form-control" v-model="year">
                            <option v-for="year in years" value="year">@{{ year }}年</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/vue.js@3.2.36/dist/vue.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash.js@4.17.21/dist/lodash.min.js"></script>
        
        <script>
            new Vue ({
                el: '#app',
                data: {
                    sum: [],
                    year: '{{ date('Y') }}',
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
                        fetch('/ajax/expenditures/years=' + this.year)
                            .then(response => response.json())
                            .then(data => {
                                if(this.chart) {
                                    this.chart.destroy();
                                }
                            
                                const SmallCategoryExpenditures = _.groupBy(data, 'smllcategory_id');
                                const sum = _.map(SmallCategoryExpenditures, SmallExpenditures => {
                                    return _.sumBy(SmallExpenditures, 'money');
                                });
                                const SmallCategory = _.keys(SmallCategoryExpenditures);
                            
                                const ctx = document.getElementById('BreakdownExpenditureChart').getContext('2d');
                                const this.chart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        datasets [{
                                        data: sum,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                            ]
                                        }],
                                        labels: SmallCategory
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            fontSize: 45,
                                            text: '子カテゴリ統計'
                                        },
                                        tooltips: {
                                            callbacks: {
                                                label(tooltipItem, data) {
                                                    const datasetIndex = tooltipItem.datasetIndex;
                                                    const index = tooltipIem.index;
                                                    const sum = data.datasets[datasetIndex].data[index];
                                                    const sumText = amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                    const smallcategory = data.labels[index];
                                                    return '' + smallcategory + ' ' sumText + ' 円';
                                                }
                                            }
                                        }
                                    }
                                });
                            )};
                        }
                    },
                    mounted() {
                        this.getYears();
                        this.getExpenditures();
                    }
                });
        </script>
        
    </body>
</html>
@endsection