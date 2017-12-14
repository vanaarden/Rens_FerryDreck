<?php
$conn = new mysqli("localhost", "admin_ajax", "welkom", "admin_ajax");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT dieren FROM ajax WHERE dieren LIKE '{$_GET["dier"]}%';");

while ($row = $result->fetch_assoc()) {
    echo $row["dieren"] . "<br>";
}
?>