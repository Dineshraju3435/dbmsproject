<?php
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo "An error occurred.<br>";
    exit;
} else {
    $emp_name = $_POST["employeeName"];
    $emp_position = $_POST["employeePosition"];
    $emp_salary = $_POST["employeeSalary"];

    // Ensure $_SESSION['user_id'] is set and not empty
    if (isset($_SESSION['user_id'])){
        $company_id = $_SESSION['user_id'];

        // Use $company_id in the query
        $insertquery = "INSERT INTO employee(company_id, name, position, salary) 
                        VALUES ('$company_id', '$emp_name', '$emp_position', '$emp_salary')";
        
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
