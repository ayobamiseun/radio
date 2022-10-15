<?php 
	include('connect.php');

	$array = array();
	$i = 1;
	$sql = mysqli_query($con, "select * from comments where puid = '$_REQUEST[uid]'");
	while ( $row = mysqli_fetch_array($sql)) {
			

			$array_row['sn'] = $i;
			$array_row['uid'] = $row['uid'];
			$array_row['puid'] = $row['puid'];
			$array_row['name'] = $row['name'];
			$array_row['email'] = $row['email'];
			$array_row['country'] = $row['country'];
			$array_row['comment'] = $row['comment'];
			$array_row['date'] = $row['date'];

			array_push($array, $array_row);

			$i++;
		}
		header('Content-Type: application/json');
		echo '{"Feed":'.json_encode($array).'}';


?>