<?php 
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo 'Error while connecting to the database.';
    
}
$user_id= $_SESSION['user_id'];
$in_query = "SELECT * FROM financial_record where company_id='$user_id'";
$query = pg_query($connection, $in_query);

if (!$query) {
    echo "Couldn't retrieve data from the database.";
} else {
    $data = []; // Initialize an array to store data for the chart

    while ($array = pg_fetch_array($query)) {
        // Push each row of data as an array into $data
        $data[] = [
            'date' => $array["date"],
            'revenue' => (float)$array["revenue"],
            'expenses' => (float)$array["expenses"],
            'profit' => (float)$array["profit"],
        ];
    }

    // Calculate growth for profit
    $profitGrowthData = [];
    for ($i = 1; $i < count($data); $i++) {
        $profitGrowth = (($data[$i]['profit'] - $data[$i - 1]['profit']) / $data[$i - 1]['profit']) * 100;
        $profitGrowthData[] = [
            'date' => $data[$i]['date'],
            'profit_growth' => $profitGrowth,
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your meta tags and title -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Line chart for Revenue, Expenses, Profit
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Revenue', 'Expenses', 'Profit'],
                <?php
                // Output the data formatted for the chart
                if(isset($data) && !empty($data)){
                    foreach($data as $row){
                        echo "['".$row['date']."', ".$row['revenue'].", ".$row['expenses'].",".$row['profit']."],";
                    }
                }
                ?>
            ]);

            var options = {
                title: 'Company Performance',
                hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);

            // Bar chart for Profit Growth
            var profitGrowthData = google.visualization.arrayToDataTable([
                ['Year', 'Profit Growth'],
                <?php
                // Output the profit growth data formatted for the bar chart
                if(isset($profitGrowthData) && !empty($profitGrowthData)){
                    foreach($profitGrowthData as $row){
                        echo "['".$row['date']."', ".$row['profit_growth']."],";
                    }
                }
                ?>
            ]);

            var profitGrowthOptions = {
                chart: {
                    title: 'Profit Growth',
                    subtitle: 'Yearly Profit Growth Rate (%)',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
            };

            var profitGrowthChart = new google.charts.Bar(document.getElementById('profit_growth_chart'));
            profitGrowthChart.draw(profitGrowthData, google.charts.Bar.convertOptions(profitGrowthOptions));
        }
    </script>
</head>
<body>
    <h1>Line graph of Revenue, Expenses, Profit</h1>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
    
    <h1>Bar graph of Profit Growth</h1>
    <div id="profit_growth_chart" style="width: 900px; height: 500px;"></div>
</body>
</html>
