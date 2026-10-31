<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\Authorization;

if (class_exists(Authorization::class)) {
    echo "Authorization class loaded!";
} else {
    echo "Authorization class NOT found!";
}
