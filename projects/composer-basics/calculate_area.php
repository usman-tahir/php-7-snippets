#! /usr/bin/env php

<?php

require_once __DIR__ . '/vendor/autoload.php';

$side = ($argv[1] !== null ? $argv[1] : null);

if ($side !== null && ctype_digit($side)) {
    Shapes\Square::area($side);
} else {
    echo "Please provide a valid size.\n";
}

?>