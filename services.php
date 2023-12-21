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
    </style>
</head>

<body>
    <div class="header">
        <h1>Finance Tracker</h1>
    </div>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <div class="services-container">
        <ul>
            <li><a href="#" onclick="showFinancialRecordForm()">Financial record</a></li>
         
            <li><a href="#">Transaction</a></li>
            <li><a href="#">Budget</a></li>
            <li><a href="#">Employee</a></li>
            <li><a href="#">Currency</a></li>
            <!-- Add more list items if needed -->
        </ul>
    </div>
    <div class="financial-record-form" id="financialRecordForm">
                <h2>Company's Financial Record</h2>
                <form action="#" method="POST">
                    <label for="date">Date:</label>
                    <input type="text" id="date" name="date" required>
                    <label for="revenue">Revenue:</label>
                    <input type="text" id="revenue" name="revenue" required>
                    <label for="expenses">Expenses:</label>
                    <input type="text" id="expenses" name="expenses" required>
                    <label for="profit">Profit:</label>
                    <input type="text" id="profit" name="profit" required>
                    <label for="cashFlow">Cash Flow:</label>
                    <input type="text" id="cashFlow" name="cashFlow" required>
                    <label for="assets">Assets:</label>
                    <input type="text" id="assets" name="assets" required>
                    <label for="liabilities">Liabilities:</label>
                    <input type="text" id="liabilities" name="liabilities" required>
                    <label for="shareholdersEquity">Shareholders Equity:</label>
                    <input type="text" id="shareholdersEquity" name="shareholdersEquity" required>
                    <button type="submit">Submit</button>
                </form>
            </div>

    <script>
        function showFinancialRecordForm() {
            const financialRecordForm = document.getElementById('financialRecordForm');
            financialRecordForm.style.display = 'block';
        }
    </script>
</body>

</html>


