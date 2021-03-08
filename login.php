<?php 

	session_start();

	// variable declaration
	$username = "";
	$email= "";
	$errors = array(); 
	$_SESSION['success'] = "";
	
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'gamersedge');




if (isset($_POST['numb'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

			$query = "SELECT * FROM userg WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				
				echo '<script language="javascript">';
                echo 'alert("invalid email or password")';
                echo '</script>';
                $sec = "1";
                 $page="login_page.html";
                header("Refresh: $sec; url=$page");
            }
             }    


		
		

		?>