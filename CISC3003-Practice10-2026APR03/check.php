<?php

$check = ini_get('display_errors');

echo("display_errors = $check\n");

if ( $check == 0 ) {
    echo("display_errors is off - you need to enable display_errors\n");
    echo("in your php.ini or check the instructions for your PHP server.\n");
} else {
    echo("It is all good...\n");
}
