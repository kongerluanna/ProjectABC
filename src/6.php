<?php
// Connect to database
$dsn = 'mysql:host=localhost;dbname=mydatabase';
$username = 'myusername';
$password = 'mypassword';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Retrieve data from database
$sql = "SELECT * FROM mytable";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Display data in HTML table
echo "<table>";
while ($row = $stmt->fetch()) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
}
echo "</table>";

// Close database connection
$pdo = null;
?>
