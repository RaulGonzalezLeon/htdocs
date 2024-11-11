<?php
$stock = 0;
$ordered = 3;

if($stock > 0){
    $message = 'In stock';
} elseif ($ordered > 0){
    $message = 'Coming soon';
} else{
    $message = 'Sold Out';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_2.4 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>
</html>