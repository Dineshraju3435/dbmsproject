<?php 
session_start();
$connection = pg_connect("host=localhost dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo 'Error while connecting to the database.';
}
$user_id= $_SESSION['user_id'];
$in_query = "SELECT * FROM budget where company_id='$user_id'";
$query = pg_query($connection, $in_query);

if (!$query) {
    echo "Couldn't retrieve data from the database.";
} else {
    $data = []; // Initialize an array to store data for the chart

    while ($array = pg_fetch_array($query)) {
        // Push each row of data as an array into $data
        $data[] = [
            $array["year"],
            (float)$array["planned_amount"], // Convert to float for numerical values
            (float)$array["actual_amount"]
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
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'planned_amount', 'actual_amount'],
                <?php
                // Output the data formatted for the chart
                if(isset($data) && !empty($data)){
                    foreach($data as $row){
                        echo "['".$row[0]."', ".$row[1].", ".$row[2]."],";
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
