<?php namespace running;
 include 'namespace.php';
 include 'namespace1.php';
 include 'namespace2.php';
 include 'nm/namespace4.php';
 use foo as veline;
 use bar as bro;
 use animate;
 use nm\man as kodew;
 $cat 		= new veline\Cat;
 $woman 	= new kodew\Woman;
 $anjing 	= new bro\Dog;
 echo $cat->says();
 echo $cat::eat();
 echo $anjing->says();
 echo animate\Animal::breathe();
 echo $woman->walk();
?>