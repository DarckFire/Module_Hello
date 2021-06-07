
<?php

$host = 'localhost' ; // Name of the host 
$username = 'root' ; //Name of the admin server
$password = '' ; // Password
$bdd_name = 'modulehello'; //Name of the Database 

$connect_bdd = new mysqli ($host , $username , $password, $bdd_name); //Connexion of the Database

// if ($connect_bdd->connect_error){
//     echo "error connexion";
// }
// else {
//     echo "successful connection";
// }
