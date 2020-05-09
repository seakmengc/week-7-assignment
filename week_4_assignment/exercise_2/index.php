<style>
    table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2;}

    tr:hover {background-color: #ddd;}

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: navy;
        color: white;
    }
</style>

<?php

include_once './Classes/Product.php';
include_once './Classes/PaymentMethods/Aba.php';
include_once './Classes/PaymentMethods/Wing.php';
include_once './Classes/PaymentMethods/PiPay.php';
include_once './Services/Functions.php';

$sample = [
    ['price' => 5, 'quantity' => 1, 'method' => new Aba()],
    ['price' => 3, 'quantity' => 2, 'method' => new Wing()],
    ['price' => 4, 'quantity' => 1, 'method' => new Aba()],
    ['price' => 5, 'quantity' => 1, 'method' => new Aba()],
    ['price' => 6, 'quantity' => 1, 'method' => new PiPay()],
    ['price' => 10, 'quantity' => 1, 'method' => new Aba()],
    ['price' => 15, 'quantity' => 1, 'method' => new Wing()],
    ['price' => 2, 'quantity' => 1, 'method' => new Wing()],
];

$prods = [];
foreach ($sample as $ind => $obj)
    $prods[] = new Product('Item ' . ($ind + 1), $obj['price'], $obj['quantity'], $obj['method']);

echo '<h2>Number of sales by ABA method: ' . getNumOfSalesByAba($prods) . '</h2>';
echo '<h2>Number of sales by PiPay and Wing method: ' . getNumOfSalesByPipayAndWing($prods) . '</h2>';

echo displayProducts($prods);