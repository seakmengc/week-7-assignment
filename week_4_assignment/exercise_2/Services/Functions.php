<?php

function getNumOfSalesByAba(array &$prods) : int
{
    return count(
        array_filter($prods, fn ($prod) => $prod->method instanceof Aba)
    );
}

function getNumOfSalesByPipayAndWing(array &$prods) : int
{
    return count(
        array_filter($prods, fn ($prod) => $prod->method instanceof PiPay or $prod->method instanceof Wing)
    );
}

function displayProducts(array $prods) : string
{
    $table = "";

    usort($prods, fn ($curr_p, $next_p) => $next_p->getTotal() > $curr_p->getTotal());
    $table .= '<table><tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Method</th>
                    <th>Total</th>
                </tr>';

    foreach ($prods as $prod) {
        $table .=  '<tr>';
        $table .=  "<td>$prod->name</td>";
        $table .=  "<td>{$prod->getPrice()}</td>";
        $table .=  "<td>{$prod->getQuantity()}</td>";
        $table .=  "<td>" . get_class($prod->method) ."</td>";
        $table .=  "<td>{$prod->getTotal()}</td>";
    }

    return $table;
}