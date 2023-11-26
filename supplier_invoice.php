<!DOCTYPE html>
<html>
<head>
  <title>Supplier Invoice Form</title>
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
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group select {
      height: 34px;
    }

    .form-group textarea {
      resize: vertical;
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

    .invoice {
      margin-top: 30px;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
    }

    .invoice h3 {
      margin-top: 0;
    }

    .invoice p {
      margin-bottom: 5px;
    }

    .invoice table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    .invoice table th,
    .invoice table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    .invoice table th {
      background-color: #ddd;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Supplier Invoice Form</h2>
    <form method="post" action="process_supplier_invoice.php">
      <div class="form-group">
        <label for="invoice_number">Invoice Number:</label>
        <input type="text" id="invoice_number" name="invoice_number" required>
      </div>
      <div class="form-group">
        <label for="supplier_name">Supplier Name:</label>
        <input type="text" id="supplier_name" name="supplier_name" required>
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
            <input type="text" name="item_description[]" placeholder="Item Description" required>
            <input type="number" name="quantity[]" placeholder="Quantity" required>
            <input type="number" name="price[]" placeholder="Price" required>
            <span class="remove-item-btn" onclick="removeItem(this)">-</span>
          </div>
        </div>
        <button type="button" class="add-item-btn" onclick="addItem()">Add Item</button>
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
        <input type="text" name="item_description[]" placeholder="Item Description" required>
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
