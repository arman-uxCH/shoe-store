
<?php
require_once "config.php";

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин обуви</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Магазин обуви</h1>

<div class="products">

<?php
while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
    echo "<p>Цена: " . $row["price"] . " руб.</p>";
    echo "<p>Размер: " . $row["size"] . "</p>";
    echo "<p>В наличии: " . $row["stock"] . " шт.</p>";
    echo "</div>";
}
?>

</div>

</body>
</html>
