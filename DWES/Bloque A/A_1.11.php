<?php 
$item = 'Chocolate';
$stock = 5;
$wanted = 3;
$deliver = true;
$can_buy = (($stock <= $wanted) && ($deliver == true));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_1.10 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can Buy: <?= $can_buy ?></p>
</body>
</html>