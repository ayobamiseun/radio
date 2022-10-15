<?php 
	
	include('connect.php');

	if($_POST['type'] == "MusicPremiere"){
		$pin = substr(str_shuffle("0123456789"), 0,6);
		$uu = substr(str_shuffle("0123456789abcdefghijklmnpqrstuvwxyz"), 0,12);
		$uid = uniqid().$uu;

		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['title']) || empty($_POST['details'])){
			echo 'null';
		}
		else{
				$name = mysqli_real_escape_string($con,$_POST['name']);
				$title = mysqli_real_escape_string($con,$_POST['title']);
				$email = mysqli_real_escape_string($con,$_POST['email']);
				$phone = mysqli_real_escape_string($con,$_POST['phone']);
				$details = mysqli_real_escape_string($con,$_POST['details']);


					if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
						$allowed = array('mp3', 'm4a', 'ogg','wav','acc','raw','wma','m4p','3gp');

						$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

						//$uid = uniqid().time();

						if ($_FILES["file"]["size"] > 20097152) {
						    echo "size";
						    
						}
						else{

							if(!in_array(strtolower($extension), $allowed)){
							echo 'format';
							unlink($file3);
							
							}
							else{
								$name = mysqli_real_escape_string($con,$_POST['name']);

								if(move_uploaded_file($_FILES['file']['tmp_name'], 'song-premiere/'.$uid.'_'.$extension)){

									$audio = 'song-premiere/'.$uid.'_'.$extension;
									
									$insert = mysqli_query($con, "insert into music_premiere (id, uid, name, email, phone, title, details, audio)
										values('','$uid','$name','$email','$phone','$title','$details','$audio')");

									if($insert){
										echo 'success';
									}
									else{
										echo 'error';
									}

								}
								else{
									echo 'upload';
								}
							}
						}

					}
					else{
						echo 'song';
					}

			}

	}
	else if($_POST['type'] == "Subscription"){
		if(empty($_POST['email'])){
			echo 'null';
		}
		else{

			$email = mysqli_real_escape_string($con,$_POST['email']);

			$insert = mysqli_query($con, "insert into ubscription (id, uid, email)
				values('','$uid','$email')");

			if($insert){
				echo 'success';
			}
			else{
				echo 'error';
			}


		}
	}

?>