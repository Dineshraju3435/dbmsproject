<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracker Services</title>
    <style>
               body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            min-height: 100vh;
            background-image: url("https://wallpaperaccess.com/full/395434.jpg");
            background-repeat: repeat;
            background-size: cover;
            background-position: center;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            background-image: linear-gradient(to right, rgb(0, 38, 77), rgb(69, 67, 67));
        }

        .header h1 {
            font-size: 32px;
            margin: 0;
            color: #bfa305e0;
            text-transform: uppercase;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
            margin-top:-2%;
            background-image: linear-gradient();
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
            
            
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav ul li a:hover {
            background-color: #f8f1f1;
        }

        .services-container {
            position: absolute;
            top: 15%;
            left: 0;
            bottom: 0;
            width: 200px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow-y: auto;
        }

        .services-container ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .services-container ul li {
            margin-bottom: 0px;
            font-size:150%
        }

        .services-container ul li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #bfa305e0;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 3px;
        }

        .services-container ul li a:hover {
            background-color: #bfa305e0;
            color: #fff;
        }

        .financial-record-form {
            display: none;
            padding: 20px;
            margin-top: 3%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-left:20%;
            margin-bottom:40%;
            margin-right:20%;
            
        }

        .financial-record-form input[type="text"] {
            text-align:left;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .financial-record-form button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #bfa305e0;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .financial-record-form button:hover {
            background-color: #b3ad00;
        }
        .transaction-form {
            display: none;
            padding: 20px;
            margin-top: 3%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-left: 20%;
            margin-bottom: 40%;
            margin-right: 20%;
        }
        
        .transaction-form input[type="text"] {
            text-align:left;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        .transaction-form button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #bfa305e0;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .transaction-form button:hover {
            background-color: #b3ad00;
        }
        textarea {
            width: 100%;
            height: 80px; /* Adjust the height as needed */
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        .budget-form {
    display: none;
    padding: 20px;
    margin-top: 3%;
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    margin-left: 20%;
    margin-bottom: 40%;
    margin-right: 20%;
}

.budget-form input[type="text"] {
    text-align: left;
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

.budget-form button {
    padding: 8px 20px;
    border: none;
    border-radius: 5px;
    background-color: #bfa305e0;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.budget-form button:hover {
    background-color: #b3ad00;
}

.employee-form {
            display: none;
            padding: 20px;
            margin-top: 3%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-left: 20%;
            margin-bottom: 40%;
            margin-right: 20%;
        }

        .employee-form input[type="text"] {
            text-align: left;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .employee-form button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #bfa305e0;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .employee-form button:hover {
            background-color: #b3ad00;
        }
        .currency-form {
            display: none;
            padding: 20px;
            margin-top: 3%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-left: 20%;
            margin-bottom: 40%;
            margin-right: 20%;
        }

        .currency-form input[type="text"] {
            text-align: left;
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .currency-form button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #bfa305e0;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .currency-form button:hover {
            background-color: #b3ad00;
        }

       
    </style>
</head>

<body>
    <div class="header">
        <h1>Finance Tracker</h1>
    </div>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="services1.php">Services</a></li>
            <li><a href="analysis.php"></a>analysis<li>
            
        </ul>
    </nav>
    <div class="services-container">
        <ul>
            <li><a href="#" onclick="showFinancialRecordForm()">Financial record</a></li><br>
         
            <li><a href="#" onclick="showTransactionForm()">Transaction</a></li><br>
            <li><a href="#" onclick="showBudgetForm()">Budget</a></li><br>
            <li><a href="#" onclick="showEmployeeForm()">Employee</a></li><br>
          
           
        </ul>
    </div>
    <div class="financial-record-form" id="financialRecordForm">
        <h2>Company's Financial Record</h2>
        <form action="finance.php" method="POST">
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" style="width:25%; height:20%" required><br><br>
            <label for="revenue">Revenue:</label>
            <input type="text" id="revenue" name="revenue" required>
            <label for="expenses">Expenses:</label>
            <input type="text" id="expenses" name="expenses" required>
            <label for="profit">Profit:</label>
            <input type="text" id="profit" name="profit" required><br><br>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="flex: 1; margin-right: 10px;">
                    <label for="cashIn">Cash In:</label>
                    <input type="text" id="cashIn" name="cashIn" required>
                </div>&emsp;&emsp;
                <div style="flex: 1;">
                    <label for="cashOut">Cash Out:</label>
                    <input type="text" id="cashOut" name="cashOut" required>
                </div>
            </div><br>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="flex: 1; margin-right: 10px;">
                    <label for="assetsAmount">Assets Amount:</label>
                    <input type="text" id="assetsAmount" name="assetsAmount" required>
                </div>&emsp;&emsp;
                <div style="flex: 1;">
                    <label for="assetsDescription">Assets Description:</label>
                    <textarea id="assetsDescription" name="assetsDescription" required></textarea>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="flex: 1; margin-right: 10px;">
                    <label for="liabilitiesAmount">Liabilities Amount:</label>
                    <input type="text" id="liabilitiesAmount" name="liabilitiesAmount" required>
                </div>&emsp;&emsp;
                <div style="flex: 1;">
                    <label for="liabilitiesDescription">Liabilities Description:</label>
                    <textarea id="liabilitiesDescription" name="liabilitiesDescription" required></textarea>
                </div>
            </div>
            <label for="shareholdersEquity">Shareholders Equity:</label>
            <input type="text" id="shareholdersEquity" name="shareholdersEquity" >
            <button type="submit">Submit</button>
        </form>
    </div>
        

            
    <div class="transaction-form" id="transactionForm">
        <h2>Transaction Details</h2>
        <form action="transaction.php" method="POST">
            <label for="transactionType">Type of Transaction:</label><br>
            <input type="text" id="transactionType" name="transactionType" required><br>
            <label for="amount">Amount:</label><br>
            <input type="text" id="amount" name="amount" required><br>
            <label for="currencyType">Currency Type:</label><br>
            <input type="text" id="currencyType" name="currencyType" required><br>
            <label for="transactionDate">Date:</label><br>
            <input type="date" id="transactionDate" name="transactionDate" required><br>
            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="budget-form" id="budgetForm" style="display: none;">
        <h2>Budget Details</h2>
        <form action="budget.php" method="POST">
            <label for="budgetYear">Year:</label><br>
            <input type="text" id="budgetYear" name="budgetYear" required><br>
            <label for="budgetCategory">Budget Category:</label><br>
            <input type="text" id="budgetCategory" name="budgetCategory" required><br>
            <label for="plannedBudget">Planned Budget:</label><br>
            <input type="text" id="plannedBudget" name="plannedBudget" required><br>
            <label for="actualBudget">Actual Budget:</label><br>
            <input type="text" id="actualBudget" name="actualBudget" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="employee-form" id="employeeForm" style="display: none;">
        <h2>Employee Details</h2>
        <form action="employee.php" method="POST">
            <label for="employeeName">Name:</label><br>
            <input type="text" id="employeeName" name="employeeName" required><br>
            <label for="employeePosition">Position:</label><br>
            <input type="text" id="employeePosition" name="employeePosition" required><br>
            <label for="employeeSalary">Salary:</label><br>
            <input type="text" id="employeeSalary" name="employeeSalary" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
        
    
   

    <script>
               function showFinancialRecordForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            const transactionForm = document.getElementById('transactionForm');

            financialRecordForm.style.display = 'block';
            transactionForm.style.display = 'none';
        }

        function showTransactionForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            const transactionForm = document.getElementById('transactionForm');

            financialRecordForm.style.display = 'none';
            transactionForm.style.display = 'block';
            budgetForm.style.display = 'none';
            employeeForm.style.display = 'none';
            currencyForm.style.display = 'none';
        }

        function showBudgetForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            const transactionForm = document.getElementById('transactionForm');
            const budgetForm = document.getElementById('budgetForm');

            financialRecordForm.style.display = 'none';
            transactionForm.style.display = 'none';
            budgetForm.style.display = 'block';
            employeeForm.style.display = 'none';
            currencyForm.style.display = 'none';
        }

        function showEmployeeForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            const transactionForm = document.getElementById('transactionForm');
            const budgetForm = document.getElementById('budgetForm');
            const employeeForm = document.getElementById('employeeForm');

            financialRecordForm.style.display = 'none';
            transactionForm.style.display = 'none';
            budgetForm.style.display = 'none';
            employeeForm.style.display = 'block';
            currencyForm.style.display = 'none';
        }

        function showCurrencyForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            const transactionForm = document.getElementById('transactionForm');
            const budgetForm = document.getElementById('budgetForm');
            const employeeForm = document.getElementById('employeeForm');
            const currencyForm = document.getElementById('currencyForm');

            financialRecordForm.style.display = 'none';
            transactionForm.style.display = 'none';
            budgetForm.style.display = 'none';
            employeeForm.style.display = 'none';
            currencyForm.style.display = 'block';
        }
     
        
    </script>
</body>

</html>


