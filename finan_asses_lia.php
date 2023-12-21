<?php 
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo 'Error while connecting to the database.';
}
$user_id= $_SESSION['user_id'];
$in_query = "SELECT date, (assests).amount as assets, (liabilites).amount as liability FROM financial_record where company_id='$user_id'";
$query = pg_query($connection, $in_query);

if (!$query) {
    echo "Couldn't retrieve data from the database.";
} else {
    $row = pg_num_rows($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your meta tags and title -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Assets', 'Liabilities'],
                <?php
                // Output the data formatted for the chart
                if($row > 0){
                    while($rows = pg_fetch_assoc($query)){
                        echo "['".$rows['date']."', ".$rows['assets'].", ".$rows['liability']."],";
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
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
    
</body>
</html>
