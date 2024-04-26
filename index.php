<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Figures\Rectangle;

$rect = new Rectangle(10, 20);
echo($rect->square());

