<?php 
//fetch.php;

if(isset($_GET["query"])) {

	include 'configdb.php';
	
	$statement = $conn->prepare("SELECT service_name FROM service WHERE service_name LIKE ? ORDER BY service_name ASC LIMIT 15");
	$statement->bind_param("s", $search);
	$search = $_GET["query"].'%';
	$statement->execute();
	$arr = $statement->get_result();
	$service_data = array();

	while($row = $arr->fetch_assoc()){
		$service_data[] = $row["service_name"];
    }
    
    $conn->close();
}

echo json_encode($service_data);

?>