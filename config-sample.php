<?php 

/** Database connection **/
$host 		= 'host_here';
$dbname   	= 'database_name_here';
$username 	= 'username_here';
$password 	= 'password_here';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    die();
};


/** Number of news items to be displayed **/
$items = "5";
