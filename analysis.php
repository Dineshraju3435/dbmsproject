<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="finan_asses_lia.php">finance_assests_liabilities</a></li>
            <li><a href="budget_pla_act.php">budget</a></li>
            <li><a href="emplo_sal_po.php">employee</a><li>
            <li><a href="finance_re_ex.php">finan_revenue_expenses</a></li>
            <li><a href="tran_table.php">transaction_table</a><li></li>
            <button onclick="calculateAndDisplayGrowth()">Calculate Growth</button>

        </ul>
    </nav>
    <script>
    function calculateAndDisplayGrowth() {
        // Fetch the data from PHP and create an array with revenue and expenses for each year
        var dataFromPHP = <?php echo json_encode($data); ?>;
    
        // Loop through the data and calculate growth for each year
        for (var i = 0; i < dataFromPHP.length; i++) {
            var revenue = dataFromPHP[i][1]; // Revenue for the current year
            var expenses = dataFromPHP[i][2]; // Expenses for the current year
    
            // Calculate growth rate
            var growthRate = ((revenue - expenses) / expenses) * 100;
    
            // Display the growth rate for each year
            console.log('Growth rate for year ' + dataFromPHP[i][0] + ': ' + growthRate.toFixed(2) + '%');
        }
    }
    </script>
</body>
</html>