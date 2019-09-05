<?php

$servername = "localhost";
$username = "root";
$password = "Maun2806";
$dbname = "testing";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("INSERT INTO user_location (longitude, latitude,capturing_device,location_create_date) VALUES (:long, :lat, :capturing_host, :create_date)");
$stmt->bindParam(':long', $long);
$stmt->bindParam(':lat', $lat);
$stmt->bindParam(':capturing_host', gethostname());
$stmt->bindParam(':create_date', date('Y-m-d'));
$long = $_REQUEST['long'];
$lat = $_REQUEST['lat'];
$stmt->execute();

?>
