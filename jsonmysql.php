<?php
include("include.classloader.php");
include("connect.php");

$db = new JSONtoMYSQL($pdo);
// create some json
$obj = "JSONFormat.json";
// save it to a table
$db->save($obj, "info");
?>
