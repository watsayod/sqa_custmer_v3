<?php
include 'configdb.php';

$sql = "SELECT * FROM customer_list";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang='en-US'>
<head>
	<meta charset="utf-8">
	<title>Customer URL Portal</title>
	<link href="https://fonts.googleapis.com/css?family=Sarabun:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap&subset=thai" rel="stylesheet">
</head>
<body>
	<?php include 'header.php'; ?>
	<div id='container'>
		<h1>Customer URL Portal</h1>
		<div id='content'>
		<?php
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo"<a href='survey.php?ID={$row['uuid']}'>{$row['custsat_id']}</a>
					<a href='survey.php?ID={$row['uuid']}'>{$row['custsat_name']}</a><br>\n";
				}
			} else {
				echo"<h2>Data not found<h2>";
			}
		?>
		</div>

	</div>
<?php include 'footer.php'; ?>
</body>

