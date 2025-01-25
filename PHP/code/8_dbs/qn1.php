<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT dish_name, price FROM dishes ORDER BY price ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<h2>Dishes by Price:</h2>";
        echo "<table border='1'><tr><th>Dish Name</th><th>Price</th></tr>";
        foreach ($result as $row) {
            echo "<tr><td>" . htmlspecialchars($row["dish_name"]) . "</td><td>" . $row["price"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>