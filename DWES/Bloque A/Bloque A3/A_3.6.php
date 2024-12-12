<?php
$products = [
    'Chocolates' => 4,
    'Caramelos' => 3,
    'Galletas' => 2.5,
    'Chicles' => 1.2
];

$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'aud' => 1.30, // Dólar Australiano
    'cad' => 1.25  // Dólar Canadiense
];

function calculate_prices($usd, $exchange_rates)
{
    return [
        'pound' => $usd * $exchange_rates['uk'],
        'euro'  => $usd * $exchange_rates['eu'],
        'yen'   => $usd * $exchange_rates['jp'],
        'aud'   => $usd * $exchange_rates['aud'],
        'cad'   => $usd * $exchange_rates['cad']
    ];
}

function format_price($price, $currency)
{
    switch ($currency) {
        case 'pound':
            return '&pound; ' . number_format($price, 2);
        case 'euro':
            return '&euro; ' . number_format($price, 2);
        case 'yen':
            return '&yen; ' . number_format($price, 2);
        case 'aud':
            return 'A$ ' . number_format($price, 2);
        case 'cad':
            return 'C$ ' . number_format($price, 2);
        default:
            return '$ ' . number_format($price, 2);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>A_3.6 RaulGL - Productos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>

    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio (US $)</th>
            <th>UK (Libra)</th>
            <th>EU (Euro)</th>
            <th>JP (Yen)</th>
            <th>AUD (Dólar Australiano)</th>
            <th>CAD (Dólar Canadiense)</th>
        </tr>

        <?php foreach ($products as $product => $price_usd): ?>
            <?php $prices = calculate_prices($price_usd, $rates); ?>
            <tr>
                <td><?= $product ?></td>
                <td><?= format_price($price_usd, 'usd') ?></td>
                <td><?= format_price($prices['pound'], 'pound') ?></td>
                <td><?= format_price($prices['euro'], 'euro') ?></td>
                <td><?= format_price($prices['yen'], 'yen') ?></td>
                <td><?= format_price($prices['aud'], 'aud') ?></td>
                <td><?= format_price($prices['cad'], 'cad') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>


