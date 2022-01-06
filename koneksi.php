<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "webqual";
try  
{ 
    $koneksi = new mysqli($host, $username, $password, $database);
    $base = mysqli_connect($host, $username, $password, $database); 
    $connect = new PDO("mysql:host=$host;dbname=$database",$username, $password);  
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error)  
{  
    echo $error->getMessage();  
} 
?>
