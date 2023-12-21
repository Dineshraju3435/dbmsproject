<?php
session_start();
$connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");

if (!$connection) {
    echo "An error occurred.<br>";
    exit;
} else {
    $user_id = $_POST['userid'];
    $password = $_POST['password'];

    $_SESSION['user_id'] = $user_id;

    $insert_query = "SELECT * FROM audit_log WHERE user_id = '$user_id' AND password = '$password'";
    $result = pg_query($connection, $insert_query);
    $rows = pg_num_rows($result);

    if ($rows > 0) {
        header("location:services1.html");
    } else {
        echo "<p>USER ID DOES NOT EXIST. PLEASE SIGN IN</p>";
    }
}
?>
