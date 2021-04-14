<?php
require_once "php/standen.php";

// ZET de array ($stand) om naar een JSON variabele
/** @var array $stand */
$encodedData = json_encode($Stand);
print $encodedData;