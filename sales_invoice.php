<!DOCTYPE html>
<html>
<head>
  <title>Sales Invoice Form</title>
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

    .form-group .quantity-input {
      display: flex;
      align-items: center;
    }

    .form-group .quantity-input input {
      width: 70%;
      margin-right: 10px;
    }

    .form-group .add-item-btn {
      margin-top: 5px;
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

    .form-group .item-row:last-child .remove-item-btn {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Sales Invoice Form</h2>
    <form method="post" action="process_invoice.php">

      <div class="form-group">
        <label for="invoice_number">Invoice Number:</label>
        <input type="text" id="invoice_number" name="invoice_number" required>
      </div>

      <div class="form-group">
        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customer_name" required>
      </div>
      <div class="form-group">
        <label for="customer_address">Customer Address:</label>
        <input type="text" id="customer_address" name="customer_address" required>
      </div>
      <div class="form-group">
        <label for="customer_email">Customer Email:</label>
        <input type="text" id="customer_email" name="customer_email" required>
      </div>
      <div class="form-group">
        <label for="customer_contactno">Customer Contact No:</label>
        <input type="text" id="customer_contactno" name="customer_contactno" required>
      </div>
      <div class="form-group">
        <label for="invoice_date">Invoice Date:</label>
        <input type="date" id="invoice_date" name="invoice_date" required>
      </div>
      <div class="form-group">
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" required>
      </div>
      <div class="form-group">
        <label for="items">Items:</label>
        <div id="item-list">
          <div class="item-row">
            <input type="text" name="item[]" placeholder="Item Name" required>
            <div class="quantity-input">
                <input type="number" name="quantity[]" placeholder="Quantity" required>
              
            </div>
            <div class="quantity-input">
              <input type="number" name="Rate[]" placeholder="Rate(hrs)" required>
              <span class="remove-item-btn" onclick="removeItem(this)">-</span>
            </div>
          </div>
        </div>
        <button type="button" class="add-item-btn" onclick="addItem()">+</button>
      </div>
      <input type="submit" value="Generate Invoice">
    </form>
  </div>

  <script>
    function addItem() {
      var itemList = document.getElementById("item-list");
      var newItemRow = document.createElement("div");
      newItemRow.className = "item-row";
      newItemRow.innerHTML = `
        <input type="text" name="item[]" placeholder="Item Name" required>
        <div class="quantity-input">
          <input type="number" name="quantity[]" placeholder="Quantity" required>
          <span class="remove-item-btn" onclick="removeItem(this)">-</span>
        </div>
      `;
      itemList.appendChild(newItemRow);
    }

    function removeItem(btn) {
      var itemRow = btn.parentNode.parentNode;
      itemRow.parentNode.removeChild(itemRow);
    }
  </script>
</body>
</html>
