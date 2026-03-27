<?php
// Include data and functions
include('data.inc.php');
include('functions.inc.php');

// Calculate subtotal
$subtotal = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4);

// Calculate shipping based on subtotal
$shipping = ($subtotal > 10000) ? 100 : 200;

// Calculate grand total
$grandTotal = $subtotal + $shipping;

// Define order numbers for loop
$orders = array(500, 510, 520, 530, 540);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CISC3003 Practice 09</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="layout">

    <?php include('left.inc.php'); ?>

    <!-- Right Area -->
    <div class="main-area">

        <?php include('header.inc.php'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="content-header">
                <h4>Order Summaries</h4>
                <p>Examine your customer orders</p>
            </div>
            <div class="orders-container">
                <!-- Left: My Orders -->
                <div class="card-orders">
                    <div class="card-title-purple">
                        <h2>My Orders</h2>
                    </div>
                    <div class="card-content">
                        <ul class="order-list">
                            <?php
                            for ($i = 0; $i < count($orders); $i++) {
                                echo '<li><a href="#">Order #' . $orders[$i] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Right: Selected Order -->
                <div class="card-selected">
                    <div class="card-title-orange">
                        <h2>Selected Order: #520</h2>
                    </div>
                    <div class="card-content">
                        <table class="order-table">
                            <caption>Customer: <strong>Mount Royal University</strong></caption>
                            <thead>
                                <tr>
                                    <th>Cover</th>
                                    <th>Title</th>
                                    <th class="num">Quantity</th>
                                    <th class="num">Price</th>
                                    <th class="num">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                outputOrderRow($file1, $title1, $quantity1, $price1);
                                outputOrderRow($file2, $title2, $quantity2, $price2);
                                outputOrderRow($file3, $title3, $quantity3, $price3);
                                outputOrderRow($file4, $title4, $quantity4, $price4);
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="totals">
                                    <td colspan="4" class="right-align">Subtotal</td>
                                    <td class="num">$<?php echo number_format($subtotal, 2); ?></td>
                                </tr>
                                <tr class="totals">
                                    <td colspan="4" class="right-align">Shipping</td>
                                    <td class="num">$<?php echo number_format($shipping, 2); ?></td>
                                </tr>
                                <tr class="grandtotals">
                                    <td colspan="4" class="right-align">Grand Total</td>
                                    <td class="num">$<?php echo number_format($grandTotal, 2); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>