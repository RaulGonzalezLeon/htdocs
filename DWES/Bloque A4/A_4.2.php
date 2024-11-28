<?php
include 'classes/Product.php';

$product = new Product(1,"Iphone 16",959.99,7);
$product2 = new Product(2,"Macbook Pro",1499.99,2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_4.2 RaulGL</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Stock</td>
        </tr>
        <tr>
            <td><?= $product->id ?></td>
            <td><?= $product->name ?></td>
            <td><?= $product->price ?></td>
            <td><?= $product->stock ?></td>
        </tr>
        <tr>
            <td><?= $product2->id ?></td>
            <td><?= $product2->name ?></td>
            <td><?= $product2->price ?></td>
            <td><?= $product2->stock ?></td>
        </tr>

    </table>
<?php include 'includes/footer.php'; ?>
</body>
</html>