<?php 
session_start();
require __DIR__.'/connection.php'; //DB connectivity
	
	$email= $_POST['email'];
	echo $password= $_POST['password'];
      echo "$email=".$email;
	//convert string to md5
	//$password 	= md5($password);
	echo $shop_url = $_SESSION['shop'];
		
$user_exist = pg_query($dbconn4, "SELECT email,password  FROM user_table WHERE store_url = '$shop_url' and email = '$email' and password = '$password'");
if(pg_num_rows($user_exist)){
				while($response = pg_fetch_assoc($user_exist)){
					$_SESSION['email'] = $email;
					$json = $response['value'];
					echo "cool";
					}
				}
			}


	

?>
