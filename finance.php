<?php
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo "An error occurred.<br>";
    exit;
}
$finan_date = $_POST['date'];
$finan_revenue = $_POST['revenue'];
$finan_expenses=$_POST['expenses'];
$finan_profit = $_POST['profit'];
$finan_cash_in=$_POST['cashIn'];
$finan_cash_out=$_POST['cashOut'];
$finan_assests = $_POST['assetsAmount'];
$assests_des=$_POST['assetsDescription'];
$finan_liabi=$_POST['liabilitiesAmount'];
$liabili_des = $_POST['liabilitiesDescription'];




if(isset($_SESSION['user_id'])){
    $company_id = $_SESSION['user_id'];
    $insert_query = "INSERT INTO financial_record(company_id, date, revenue, expenses, profit, assests, liabilites, cash_in, cash_out)
                 VALUES ('$company_id', '$finan_date', '$finan_revenue', '$finan_expenses', '$finan_profit', 
                         ('$finan_assests', '$assests_des'), ('$finan_liabi', '$liabili_des'), '$finan_cash_in', '$finan_cash_out')";
    $insertresult=pg_query($connection,$insert_query);
if (!$insertresult) {
    echo "Error inserting data into the database: " . pg_last_error($connection);
} else {
    // Redirect to a page after successful insertion
    header("Location: services1.html");
    exit;
}
} else {
echo "Error: User ID not set or empty.";
}



?>