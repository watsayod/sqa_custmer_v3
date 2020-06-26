<?php

//fetch.php;

$service_data = array();

if(isset($_GET["query"]))
{
	$connect = new PDO("mysql:host=localhost;  dbname=sqa_customer_v3; charset=utf8", "root", "");

	$query = "SELECT service_name FROM service WHERE service_name LIKE '".$_GET["query"]."%' ORDER BY service_name ASC LIMIT 15";

	$statement = $connect->prepare($query);

	$statement->execute();

	while($row = $statement->fetch(PDO::FETCH_ASSOC))
	{

	$service_data[] = $row["service_name"];

	}
}

echo json_encode($service_data);

?>