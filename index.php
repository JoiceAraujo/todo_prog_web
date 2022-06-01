<?php 
  error_reporting(E_ALL ^ E_WARNING);

  include_once __DIR__ . '/database/Database.php';

  Database::createSchema();
?>