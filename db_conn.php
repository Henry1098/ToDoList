<?php 

$sName = "sql11.freesqldatabase.com:3306";
$uName = "sql11445647";
$pass = "d8zqDRiTjk";
$db_name = "sql11445647";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}