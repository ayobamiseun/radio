<?php 
	include('connect.php');

	$array = array();
	$i = 1;
	if(!empty($_REQUEST['uid'])){
		
		$sql = mysqli_query($con, "select * from posts order by odr asc, id desc");
	}
	else{
		if(empty($_REQUEST['limit'])){
			$sql = mysqli_query($con, "select * from posts where uid = '$_REQUEST[uid]'");
		}
		else{
			$limit = $_REQUEST['limit'];
			$sql = mysqli_query($con, "select * from posts where uid !='$_REQUEST[uid2]' order by odr asc, id desc limit $_REQUEST[limit]");
		}
		
	}
	while ( $row = mysqli_fetch_array($sql)) {
			$puid = $row['uid'];
			$sql2 = mysqli_query($con, "select id from comments where puid  = '$puid'");
			$num = mysqli_num_rows($sql2);

			$array_row['sn'] = $i;
			$array_row['odr'] = $row['odr'];
			$array_row['uid'] = $row['uid'];
			$array_row['puid'] = $row['puid'];
			$array_row['title'] = $row['title'];
			$array_row['tag'] = $row['tag'];
			$array_row['details'] = strip_tags(substr($row['details'], 0,50)); 
			$array_row['thumb'] = $row['thumb'];
			$array_row['link'] = $row['link'];
			$array_row['type'] = $row['type'];
			$array_row['comment'] = $num;
			//$array_row['category'] = $row['category'];
			//$array_row['golive'] = $row['goliveapp'];
			$array_row['views'] = $row['views'];
			$array_row['status'] = $row['status'];
			$array_row['title_uid'] = $row['title_uid'];
			$array_row['date'] = $row['date'];


			array_push($array, $array_row);

			$i++;
		}
		header('Content-Type: application/json');
		echo '{"Feed":'.json_encode($array).'}';


?>