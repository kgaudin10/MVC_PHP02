<?php
class Conf {
 
 static private $databases = array(
 // ou localhost sur votre machine
 'hostname' => 'root@localhost',
 // A l'IUT, vous avez une BDD nommee comme votre login
 // Sur votre machine, vous devrez creer une BDD
 'database' => 'mvc 2',
 // A l'IUT, c'est votre login
 // Sur votre machine, vous avez surement un compte 'root'
 'login' => 'root',
 );
 
 static public function getLogin() {
 //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
 return self::$databases['login'];
 }
 static public function getHostname() {
 //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
 return self::$databases['hostname'];
 }
  static public function getDatabase() {
 //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
 return self::$databases['database'];
 }
 static private $debug = True; 
 
 static public function getDebug() {
 return self::$debug;
 }
 
?>