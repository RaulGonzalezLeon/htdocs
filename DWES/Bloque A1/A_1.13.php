<?php
$offers = [
    ['name' => 'Iphone 15', 'price' => 800, 'stock' => 12,],
    ['name' => 'Ipad Mini 7', 'price' => 600, 'stock' => 6,],
    ['name' => 'MacBook Air 15 M3', 'price' => 1800, 'stock' => 2,],
    ['name' => 'Airpods Pro 2', 'price' => 180, 'stock' => 25,],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_1.13 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Apple Store</h1>
    <h2>Products</h2>
    <p><?php echo $offers[0]['name']; ?> -
      $<?php echo $offers[0]['price']; ?> </p>
    <p><?php echo $offers[1]['name']; ?> -
      $<?php echo $offers[1]['price']; ?> </p>
    <p><?php echo $offers[2]['name']; ?> -
      $<?php echo $offers[2]['price']; ?> </p>
    <p><?php echo $offers[3]['name']; ?> -
      $<?php echo $offers[3]['price']; ?> </p>
</body>
</html>