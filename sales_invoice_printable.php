<!DOCTYPE html>
<html>
<head>
    <title>Printable Invoice</title>
    <style>
        /* Define the styles for the printable invoice */
        /* ... Add your custom CSS styles here ... */
    </style>
</head>
<body>
    <h1>Invoice</h1>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through invoice items and populate the table rows -->
            <?php
            $invoiceItems = [
                ['Item 1', 2, 10.00],
                ['Item 2', 1, 5.50],
                ['Item 3', 3, 8.75],
            ];

            $total = 0;

            foreach ($invoiceItems as $item) {
                $itemName = $item[0];
                $quantity = $item[1];
                $price = $item[2];
                $itemTotal = $quantity * $price;
                $total += $itemTotal;

                echo "<tr>";
                echo "<td>$itemName</td>";
                echo "<td>$quantity</td>";
                echo "<td>$price</td>";
                echo "<td>$itemTotal</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" align="right">Total:</td>
                <td><?php echo $total; ?></td>
            </tr>
        </tfoot>
    </table>

    <br>

    <!-- Add a button to print the invoice -->
    <button onclick="window.print()">Print Invoice</button>
</body>
</html>
