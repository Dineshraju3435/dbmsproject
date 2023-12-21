<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Tracker Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("https://wallpaperaccess.com/full/395434.jpg");
            background-repeat: repeat;
            background-size: cover;
        }

        .login-container {
            width: 400px;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            
            
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #bfa305e0;
            font-size: 24px;
            text-transform: uppercase;
        }

        .input-group {
            margin-bottom: 20px;
            color: #bfa305e0;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #bfa305e0;
        }

        button {
            width: 106%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #804600;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #b3ad00;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: #bfa305e0;
        }

        .signup-link a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .signup-link a:hover {
            color: #bfa305e0;
        }

        /* Animation */
        @keyframes fadein {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scale {
            from {
                transform: scale(0.9);
            }

            to {
                transform: scale(1);
            }
        }

        /* Hover Effects */
        .login-container:hover {
            transform: scale(1.02);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
        }

        button:hover {
            background-color: #b3ad00;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="login-container" style="animation: fadein 0.6s ease-in-out;">
        <form class="login-form" action="" method="POST">
            <h2>Register your company</h2>
            <div class="input-group">
                <label for="cname">Company name:</label>
                <input type="text" id="cname" name="cname" required>
            </div>
            <div class="input-group">
                <label for="industry">Industry:</label>
                <input type="text" id="industry" name="industry" required>
    </div>
            <div class="input-group">
                <label for="address">Company address:</label>
                <input type="text" id="address" name="address" required></div>
                <div class="input-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>


</body>

</html>
