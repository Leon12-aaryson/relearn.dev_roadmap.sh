<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Populate dropdown
    $sql = "SELECT dish_id, dish_name FROM dishes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $dishes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($dishes as $dish) {
        echo "<option value='" . htmlspecialchars($dish['dish_id']) . "'>" . htmlspecialchars($dish['dish_name']) . "</option>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dish_id = intval($_POST['dish']);
        $stmt = $conn->prepare("SELECT * FROM dishes WHERE dish_id = :dish_id");
        $stmt->bindParam(':dish_id', $dish_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "<p><strong>Dish ID:</strong> " . $result['dish_id'] . "</p>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($result['dish_name']) . "</p>";
            echo "<p><strong>Price:</strong> " . $result['price'] . "</p>";
            echo "<p><strong>Is Spicy:</strong> " . ($result['is_spicy'] ? 'Yes' : 'No') . "</p>";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>