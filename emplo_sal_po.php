<?php 
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo 'Error while connecting to the database.';
}
$user_id= $_SESSION['user_id'];
$in_query = "SELECT name, salary, position FROM employee where company_id='$user_id'";
$query = pg_query($connection, $in_query);

if (!$query) {
    echo "Couldn't retrieve data from the database.";
} else {
    $data = []; // Initialize an array to store data for the table

    while ($array = pg_fetch_array($query)) {
        // Push each row of data as an array into $data
        $data[] = [
            $array["name"],
            (float)$array["salary"], // Convert to float for numerical values
            $array["position"]
        ];
    }
}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('number', 'Salary');
        data.addColumn('string', 'Position');

        <?php
        // Output the data formatted for the table
        if(isset($data) && !empty($data)){
            echo "data.addRows([";
            foreach($data as $row){
                echo "['".$row[0]."', ".$row[1].", '".$row[2]."'],";
            }
            echo "]);";
        }
        ?>

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div"></div>
  </body>
</html>
