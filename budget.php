<?php 
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");
if (!$connection){
    echo"connection failed";
    exit;
}else{ 
    $bud_year=$_POST["budgetYear"];
    $bud_categary=$_POST["budgetCategory"];
    $planned_amo=$_POST["plannedBudget"];
    $actual_amo=$_POST["actualBudget"];



    if (isset($_SESSION['user_id'])){
        $company_id = $_SESSION['user_id'];

        // Use $company_id in the query
        $insertquery="INSERT INTO budget(company_id,year,budget_categary,planned_amount,actual_amount) VALUES ('$company_id','$bud_year','$bud_categary','$planned_amo','$actual_amo')";
        $insertresult = pg_query($connection, $insertquery);
        
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
}
?>