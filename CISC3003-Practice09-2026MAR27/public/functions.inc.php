<?php
function outputOrderRow($file, $title, $quantity, $price) {
    $amount = $quantity * $price;
    echo '<tr>';
    echo '<td><img src="../images/books/tinysquare/' . $file . '" alt="Book Cover"></td>';
    echo '<td>' . $title . '</td>';
    echo '<td class="num">' . $quantity . '</td>';
    echo '<td class="num">' . $price . '</td>';
    echo '<td class="num">$' . number_format($amount, 2) . '</td>';
    echo '</tr>';
}
?>
