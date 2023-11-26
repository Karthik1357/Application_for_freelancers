<!DOCTYPE html>
<html>
<head>
  <title>Supplier Receipt Form</title>
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

    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
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
    <h2>Supplier Receipt Form</h2>
    <form method="post" action="process_supplier_receipt.php">
      <div class="form-group">
        <label for="receipt_number">Receipt Number:</label>
        <input type="text" id="receipt_number" name="receipt_number" required>
      </div>
      <div class="form-group">
        <label for="supplier_name">Supplier Name:</label>
        <input type="text" id="supplier_name" name="supplier_name" required>
      </div>
      <div class="form-group">
        <label for="receipt_date">Receipt Date:</label>
        <input type="date" id="receipt_date" name="receipt_date" required>
      </div>
      <div class="form-group">
        <label for="invoice_number">Invoice Number:</label>
        <input type="text" id="invoice_number" name="invoice_number" required>
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
        <label for="item_description">Item Description:</label>
        <textarea id="item_description" name="item_description" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>
      </div>
      <input type="submit" value="Generate Receipt">
    </form>
  </div>
</body>
</html>
