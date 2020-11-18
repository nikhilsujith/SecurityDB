<?php

$dbname="SECURITY3";
$host="security.cspylg0mkver.us-east-2.rds.amazonaws.com";
$port=3306;
$user="nikhil";
$password="securitydb*123";

    try{
        $db = new PDO("mysql:host=$host;dbname=$dbname;port=3306",$user,$password);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    }catch (Exception $e){
        echo "Unable to connect";
        echo $e -> getMessage();
        exit;
    }
?>
