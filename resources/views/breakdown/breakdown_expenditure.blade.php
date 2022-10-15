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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
        <style type ="text/css">
            .box{
                width:800px;
                margin:0 auto;
            }
        </style>
        
        <script type="text/javascript">
            var analytics = <?php echo $smallcategory_id; ?>
            
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            function drawChart()
            {
                var data = google.visualization.arrayToDataTable(analytics);
                
                var options = {
                    title : '小カテゴリの合計金額'
                };
                
                var chart =new google.visualization.PieChart(document.getElementById('pie_chart_smallcategory'));
                chart.draw(data, options);
            }
        </script>
    </head>
    
    <body>
       <h3>Make Google Pie Chart in Laravel</h3>
       
       <div class="panel panel-default">
           <div class="panel-heating">
               <h4 class=panel-title>小カテゴリの合計金額</h4>
            </div>
            <div class="panel-body_smallcategory">
                <div id="pie_chart_smallcategory" style="width:750px; height:450px;"></div>
            </div>
        </div>
    </body>
</html>
@endsection