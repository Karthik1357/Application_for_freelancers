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
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li class="dropdown">
                Sales
                <div class="dropdown-content">
                    <a href="#">Sales Invoices</a>
                    <a href="#">Sales Receipts</a>
                </div>
            </li>
            <li class="dropdown">
                Purchases
                <div class="dropdown-content">
                    <a href="#">Purchase Invoices</a>
                    <a href="#">Purchase Receipts</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="content">
        <!-- Content of the page goes here -->
    </div>
</body>
</html>
