<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hoofdstuk 6</title>
    <style>
        table, tr ,td {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
        }
    </style>
</head>


<table>
<?php
$servername = "localhost";
$dbname = "schoolphp";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
     // echo "Connected!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "select  * from cursist";
$stmt = $conn->prepare($query) or die ("ERROR 1");
$stmt->execute() or die ('ERROR 2');

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $row['cursistnr'] . "</td>";
    echo "<td>" . $row['naam'] . "</td>";
    echo "<td>" . $row['roepnaam'] . "</td>";
    echo "<td>" . $row['straat'] . "</td>";
    echo "<td>" . $row['plaats'] . "</td>";
    echo "<td>" . $row['geslacht'] . "</td>";
    echo "<td>" . $row['geb_datum'] . "</td>";
    echo "</tr>";
}


?>
</table>
</body>
</html>
