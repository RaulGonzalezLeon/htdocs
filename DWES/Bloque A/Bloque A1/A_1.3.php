<?php
$nutrition = [
'fat' => 42,
'sugar' => 60,
'salt' => 3.5,
];
$nutrition['protein'] = 2.6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_1.3 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat'] ;?>%</p>
    <p>Sugar:   <?php echo $nutrition['sugar'] ;?>%</p>
    <p>Salt:   <?php echo $nutrition['salt'] ;?>%</p>
    <p>Protein:   <?php echo $nutrition['protein'] ;?>%</p>
</body>
</html>