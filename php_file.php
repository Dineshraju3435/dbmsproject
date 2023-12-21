<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
    //  connecting the database with the php .
    
    $connection = pg_connect("host=financetrackergda.postgres.database.azure.com dbname=finance_tracker user=Aravind password=Arvi@194");
    if (!$connection) {
        echo "an error is occured";
        exit;
    }
    $result= pg_query($connection,"select * from company_one");
    if(!$result){
        echo "An error is occured";
        exit;
    }
    while($row = pg_fetch_assoc($result)){
        echo
        "<tr>
        <td>{$row['company_id']}</td>
        <td>{$row['name']}</td>
    </tr>
        ";
    }
    
    
    ?>
</body>
</html>