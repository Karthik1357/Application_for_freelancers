<!DOCTYPE html>
<html>
<head>
    <title>Menu Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            width: 250px;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 10px;
            cursor: pointer;
        }

        .sidebar li:hover {
            background-color: #555;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .dropdown-content {
            display: none;
            background-color: #555;
            padding: 10px;
        }

        .dropdown-content a {
            color: #fff;
            display: block;
            padding: 5px;
            text-decoration: none;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li class="dropdown">
                Sales
                <div class="dropdown-content">
                    <a href="#">Invoices</a>
                    <a href="#">Receipts</a>
                </div>
            </li>
            <li class="dropdown">
                Purchases
                <div class="dropdown-content">
                    <a href="#">Invoices</a>
                    <a href="#">Receipts</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="content">
        <h2>Create Invoice</h2>
        <form method="post" action="create_invoice.php">
            <div class="form-group">
                <label for="invoice_number">Invoice Number:</label>
                <input type="text" name="invoice_number" id="invoice_number" required>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name:</label>
                <input type="text" name="customer_name" id="customer_name" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</body>
</html>
