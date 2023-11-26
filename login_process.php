<!-- <?php
// Assuming you have a MySQL database connection established

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password for security (you may use a different method)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$hostname = "localhost";      // Hostname of the database server
$dbusername = "root";  // Username for accessing the database
$dbpassword = "";  // Password for the database user
$database = "test";  // Name of the database

// Create a database connection
$connection = mysqli_connect($hostname, $dbusername, $dbpassword, $database);

// Insert the login credentials into the database
$query = "INSERT INTO test (Username, Password) VALUES ('$username', '$hashedPassword')";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Login credentials inserted into the database successfully.";
} else {
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?> -->


<?php
// Database credentials
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

// Create a connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to fetch user from the database
$sql = "SELECT * FROM credentials WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, redirect to the home page or display a success message
    header("Location: home.php");
} else {
    // User doesn't exist, redirect back to the login page or display an error message
    header("Location: login.php?error=1");
}

$conn->close();
?>

