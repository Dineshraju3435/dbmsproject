<?php
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");
if (!$connection) {
    echo "An error occurred.<br>";
    exit;
}else{

    //inputing values from the user
    $user_id = $_POST["userid"];
    $company_name=$_POST["companyname"];
    $company_industry=$_POST["industry"];
    $company_address=$_POST["companyaddres"];
    $company_email=$_POST["email"];
    $company_contact=$_POST["contacts"];
    $company_password=$_POST["password"];

    session_start();
    $_SESSION['variable']='$user_id';



    // first thing inserting into the company table .
   
    $in_com_query="INSERT INTO company_one(company_id,name,industry,address,email_id)  VALUES ('$user_id','$company_name','$company_industry','$company_address','$company_email')" ;
    $in_com_result= pg_query($connection, $in_com_query);
    if(!$in_com_result){
        echo "Error inserting data into the table company_one: ".pg_last_error($connection);
    }

    // inserting the contacts into the company_contacts
    
    $in_contact_query = "INSERT INTO company_contact(company_id,contact_info) VALUES ('$user_id','$company_contact')";
    $in_contact_result= pg_query($connection, $in_contact_query);
    if(!$in_contact_result){
        echo "Error inserting data into the table company_contact:".pg_last_error($connection);
    }

    // inserting the user_id and password into the audit_log --- did'nt create tyhe audit_log table .

    $in_audit_query="INSERT INTO audit_log(user_id,password,date_time) VALUES ('$user_id','$company_password',CURRENT_TIMESTAMP)" ;
    $in_audit_result= pg_query($connection, $in_audit_query);
    if(!$in_audit_result){
        echo "Error inserting data into the table audit_log: ".pg_last_error($connection);
    
    }else{
        // Redirect to login page after successful insertion
        header("Location:services1.html");
        exit;
    }







}
?>
