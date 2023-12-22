<?php 
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");
if (!$connection){
    echo"connection failed";
    exit;
}else{
    $currency_id = $_SESSION["company_id"];
    $tran_type=$_POST["transactionType"];
    $tran_amount=$_POST["amount"];
    $tran_date=$_POST["transactionDate"];
    $tran_description=$_POST["description"];
    $tran_currency=$_POST["currencyType"];

    $currency_query = "SELECT * from currency where currency_name='$tran_currency' ";
    $currency_result=pg_query($connection,$currency_query);
    $currency_row=pg_fetch_assoc($currency_result);
    $currency_id=$currency_row['currency_id'];


    $record_query = "SELECT * from financial_record order by record_id DESC limit 1";
    $record_result=pg_query($connection,$record_query);
    $record_row=pg_fetch_assoc($record_result);
    $record_id=$record_row['record_id'];



    $insertquery = "INSERT INTO transaction(currency_id,transaction_type,amount,date,description,record_id) VALUES ('$currency_id','$tran_type','$tran_amount','$tran_date','$tran_description','$record_id')";
    $insertresult= pg_query($connection,$insertquery);

    if (!$insertresult) {
        echo "Error inserting data into the database: " . pg_last_error($connection);
    } else {
        // Redirect to login page after successful insertion
        header("Location:services1.html");
        exit;
    }
}
?>
