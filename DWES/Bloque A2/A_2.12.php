<?php
$best_sellers = ['Toffee', 'Mints', 'Fudge','Chocolate', 'Kinder'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_2.12 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <?php foreach ($best_sellers as $candy) { ?>
        <p><?= $candy ?></p>
    <?php } ?>
</body>
</html>