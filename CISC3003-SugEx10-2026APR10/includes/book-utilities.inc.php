<?php

function readCustomers($filename) {
    $customers = array();
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $fields = explode(";", $line);
        $customer = array();
        $customer['id'] = trim($fields[0]);
        $customer['firstName'] = trim($fields[1]);
        $customer['lastName'] = trim($fields[2]);
        $customer['email'] = trim($fields[3]);
        $customer['university'] = trim($fields[4]);
        $customer['address'] = trim($fields[5]);
        $customer['city'] = trim($fields[6]);
        $customer['state'] = isset($fields[7]) ? trim($fields[7]) : '';
        $customer['country'] = isset($fields[8]) ? trim($fields[8]) : '';
        $customer['zip'] = isset($fields[9]) ? trim($fields[9]) : '';
        $customer['phone'] = isset($fields[10]) ? trim($fields[10]) : '';
        $customer['sales'] = isset($fields[11]) ? trim($fields[11]) : '';
        $customers[] = $customer;
    }
    return $customers;
}

function readOrders($customerId, $filename) {
    $orders = array();
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $fields = explode(",", $line);
        if (trim($fields[1]) == $customerId) {
            $order = array();
            $order['orderId'] = trim($fields[0]);
            $order['customerId'] = trim($fields[1]);
            $order['isbn'] = trim($fields[2]);
            $order['title'] = trim($fields[3]);
            $order['category'] = isset($fields[4]) ? trim($fields[4]) : '';
            $orders[] = $order;
        }
    }
    return $orders;
}

?>
