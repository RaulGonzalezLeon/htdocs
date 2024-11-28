<?php
function generarTablas($numero){
        echo "<table>";
        echo "<tr>";
        echo "<th>" . "a" . "</th>";
        echo "<th>" . "*" . "</th>";
        echo "<th>" . "b" . "</th>";
        echo "<th>" . "=" . "</th>";
        echo "<th>" . "a * b" . "</th>";
        echo "</tr>";
    for($i = 1; $i <= 10; $i++){
        echo "<tr>";
        echo "<td>" . $numero . "</td>";
        echo "<td>" . "*" . "</td>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . "=" . "</td>";
        echo "<td>" . $numero * $i . "</td>";
        echo "</tr>";
        
    }
        echo "</table>";
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?= generarTablas(5) ?>
</body>
</html>