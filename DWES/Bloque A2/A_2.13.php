<?php
$stock = 25;

if ($stock >= 10) {
    $message = 'Good availability';
}

if ($stock > 0 && $stock < 10) {
    $message = 'Low stock';
}

if ($stock == 0) {
    $message = 'Out of stock';
}
?>
<?php require_once 'includes/header.php'; ?>

<h2>Chocolate</h2>
<p><?= $message ?></p>

<?php include 'includes/footer.php'; ?>

<!-- includes/header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <footer>&copy; <?php echo date('Y')?></footer>
</body>
</html>