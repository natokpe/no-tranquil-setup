<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\TranquilSetup\Engine;

/* Config: Meta boxes */

$meta = [];

$meta[] = require('meta' . DIRECTORY_SEPARATOR . 'meta-person.php');
$meta[] = require('meta' . DIRECTORY_SEPARATOR . 'meta-event.php');

$meta = array_merge(...$meta);

return $meta;
