<?php 
$url = parse_url(getenv("mysql://b99def32e72db0:be70a23d@us-cdbr-east-06.cleardb.net/heroku_1f6f23c513be6e6?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
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
