<?php
$var= "aaahhh";
$v="Hello World";
echo strtoupper($var) . "\n" . strtolower($var) . "\n" . ucfirst($var) . "\n" . lcfirst($var) . "\n" . substr($var,-4,2);
$a = substr($v,2,-2);
echo ucfirst($a);
?>