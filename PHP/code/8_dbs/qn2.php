<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $price = floatval($_POST['price']);
        
        $sql = "SELECT dish_name, price FROM dishes WHERE price >= :price ORDER BY price ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            echo "<h2>Dishes priced at or above $price:</h2>";
            echo "<table border='1'><tr><th>Dish Name</th><th>Price</th></tr>";
            foreach ($result as $row) {
                echo "<tr><td>" . htmlspecialchars($row["dish_name"]) . "</td><td>" . $row["price"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No dishes meet this price criteria.";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>