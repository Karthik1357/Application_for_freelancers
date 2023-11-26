<!DOCTYPE html>
<html>
<head>
  <title>Sales Receipt Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group select {
      height: 34px;
    }

    .form-group .item-row {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    .form-group .item-row input[type="text"],
    .form-group .item-row input[type="number"] {
      width: 100%;
    }

    .form-group .remove-item-btn {
      margin-left: 10px;
      cursor: pointer;
    }

    .form-group .add-item-btn,
    .form-group .remove-item-btn {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 8px 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group .add-item-btn:hover,
    .form-group .remove-item-btn:hover {
      background-color: #45a049;
    }

    .form-group input[type="submit"] {
      width: auto;
      margin-top: 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .receipt {
      margin-top: 30px;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
    }

    .receipt h3 {
      margin-top: 0;
    }

    .receipt p {
      margin-bottom: 5px;
    }

    .receipt table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    .receipt table th,
    .receipt table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    .receipt table th {
      background-color: #ddd;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Sales Receipt Form</h2>
    <form method="post" action="process_receipt.php">
      <div class="form-group">
        <label for="receipt_number">Receipt Number:</label>
        <input type="text" id="receipt_number" name="receipt_number" required>
      </div>
      <div class="form-group">
        <label for="invoice_number">Invoice Number:</label>
        <input type="text" id="invoice_number" name="invoice_number" required>
      </div>
      <div class="form-group">
        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customer_name" required>
      </div>
      <div class="form-group">
        <label for="receipt_date">Receipt Date:</label>
        <input type="date" id="receipt_date" name="receipt_date" required>
      </div>
      <div class="form-group">
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required>
          <option value="">Select Payment Method</option>
          <option value="Cash">Cash</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Bank Transfer">Bank Transfer</option>
          <option value="PayPal">PayPal</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="items">Items:</label>
        <div id="item-list">
          <div class="item-row">
            <input type="text" name="item[]" placeholder="Item Name" required>
            <input type="number" name="quantity[]" placeholder="Quantity" required>
            <input type="number" name="price[]" placeholder="Price" required>
            <span class="remove-item-btn" onclick="removeItem(this)">-</span>
          </div>
        </div>
        <button type="button" class="add-item-btn" onclick="addItem()">+</button>
      </div>
      <input type="submit" value="Generate Receipt">
    </form>
  </div>

  <script>
    function addItem() {
      var itemList = document.getElementById("item-list");
      var newItemRow = document.createElement("div");
      newItemRow.className = "item-row";
      newItemRow.innerHTML = `
        <input type="text" name="item[]" placeholder="Item Name" required>
        <input type="number" name="quantity[]" placeholder="Quantity" required>
        <input type="number" name="price[]" placeholder="Price" required>
        <span class="remove-item-btn" onclick="removeItem(this)">-</span>
      `;
      itemList.appendChild(newItemRow);
    }

    function removeItem(btn) {
      var itemRow = btn.parentNode;
      itemRow.parentNode.removeChild(itemRow);
    }
  </script>
</body>
</html>
