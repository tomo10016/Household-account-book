<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Breakdown Expenditure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    </head>
    <body>
        <h2>支出の内訳</h2>
        <div class="col-md-6">
            <canvas id="chart"></canvas>
        <div>
        <script>
            var ctx = getElementId('chart').getContext('2d');
            var BreakdownChart = new Chart(ctx, {
                type: 'pie',
                data: {
                
            });
        </script>
    </body>
</html>
