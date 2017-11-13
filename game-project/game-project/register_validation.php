<?php
//Declaring variables
	$uname="";
	$email="";
	$pass1="";
	$pass2="";
	$error_array=array();//store error messages
	$email_error_used = "Email already in use";
	$email_error_format = "Invalid format";
	$uname_error = "Your username must be between 2 and 25";
	$pass_error = "Your passwords do not match.";
	$form_success = "<span>You have successfully registered.</span>";
	$form_empty = "<span>Please fill out the required fields.</span>";
	$enter_uname = "Please enter a valid username";
	
	if(isset($_POST['reg_button'])){
		//Register form values
		$uname=strip_tags($_POST['rname']);//Remove html tags
		$uname=str_replace(' ', '', $uname);//remove spaces
		$uname=ucfirst(strtolower($uname));//capitalize first letter
		$_SESSION['rname']=$uname;//stores first name
		
		
		$email=strip_tags($_POST['remail']);//Remove html tags
		$email=str_replace(' ', '', $email);//remove spaces
		$_SESSION['remail']=$email;//stores email
		
		
		$pass1=strip_tags($_POST['rpword1']);//Remove html tags
		$pass2=strip_tags($_POST['rpword2']);//Remove html tags
		$_SESSION['rpword1']=$pass1;//stores first password
		$_SESSION['rpword2']=$pass2;//stores second password
		
			//Check if email is in valid format
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email=filter_var($email, FILTER_VALIDATE_EMAIL);
			//Check if email already exists
			$e_check=mysqli_query($conn, "SELECT reg_email FROM users WHERE reg_email = '$email'");
			//Count the number of rows returned
			$num_rows=mysqli_num_rows($e_check);
			if($num_rows>0){
				array_push($error_array,$email_error_used);
			}
		}
		else{
			array_push($error_array,$email_error_format);
		}
		if (strlen($uname)>25 || strlen($uname)<2){
			array_push($error_array, $uname_error );
		}
		
		if ($pass1 != $pass2){
			array_push($error_array,$pass_error );	
		}
		if (empty($error_array)){
			//encrypt password before sending to database
			$password=password_hash($pass1, PASSWORD_DEFAULT);
			$username=strtolower($uname);
			$check_username_query=mysqli_query($conn, "SELECT reg_uname FROM users WHERE reg_uname='$username'");
			//if username exists add number to username
			$i=0;
			while(mysqli_num_rows($check_username_query) !=0){
				$i++;//Add 1 to i
				$username=$username."_".$i;
				$check_username_query=mysqli_query($conn, "SELECT reg_uname FROM users WHERE reg_uname='$username'");
			}
			$query=mysqli_query($conn, "INSERT INTO users VALUES('','$uname', '$email', '$password')");
			array_push($error_array, $form_success);
		//Clear session variables
		$_SESSION['rname']="";
		$_SESSION['remail']="";
		$_SESSION['rpword1']="";
		$_SESSION['rpword2']="";
		}//end if
		
	}//end if
	
	
?>