<?php
require 'autoloader.php';

use Classes\Database\Connection;

$connection = new Connection();

$tableau = $connection->query('SELECT * FROM product');
var_dump($tableau);