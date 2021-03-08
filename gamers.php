<?php 

	session_start();

	// variable declaration
	$username = "";
	$email= "";
	$errors = array(); 
	$_SESSION['success'] = "";


	if(isset($_POST['submit'])){ 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'gamersedge');
	
	
	
	
		// receive all input values from the form
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		
		
		$query = "INSERT INTO `userg`(fname,lname,email,password) VALUES('$fname','$lname', '$email','$password')";
		
		$result = mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: home.php');
		}
			if(isset($_POST['feed'])){ 
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'gamersedge');
	
	

		// receive all input values from the form
		
		$comment = mysqli_real_escape_string($db, $_POST['comment']);
		$mail = mysqli_real_escape_string($db, $_POST['mail']);
		
		
		
			
$_SESSION['email']=$mail;
		
		$query = "INSERT INTO `feedback`(mail,comment) VALUES('$mail','$comment')";

		
		$result = mysqli_query($db, $query);
           header('location: feed.php');
           	echo '<script language="javascript">';
                  echo'feeback sucessfully sent';
                echo '</script>';
                $sec = "1";
                 $page="home.php";
                header("Refresh: $sec; url=$page");
	      
		 

	// LOGIN USER
	
	
	
		
			
		
		
		
	}
	
		
?>		