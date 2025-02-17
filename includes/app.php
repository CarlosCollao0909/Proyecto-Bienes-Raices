<?php 

require 'functions.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

use Model\ActiveRecord;

//conectar a la BD
$db = conectarDB();

ActiveRecord::setDB($db);

?>