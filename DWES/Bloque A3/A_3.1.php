<?php
function write_logo(){
    echo '<img src="img/logo.png" alt="Logo">';
}

function write_copyright_notice(){
    $year = date('Y');
    echo '&copy; ' . $year;
    echo " The Candy Store";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_3.1 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?php write_logo() ?> The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to the Candy Store</h2>
    </article>
    <footer>
        <?php write_logo() ?>
        <?php write_copyright_notice() ?>
    </footer>
</body>
</html>