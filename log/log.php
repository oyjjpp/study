<?php
namespace log;

use Monolog\Logger;

require '../vendor/autoload.php';
$log = new Logger('name');

echo "<pre>";
var_dump($log);
