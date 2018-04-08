<?php


	if(isset($_POST['submit'])){

		// $fname =$_POST['firstname'];
		// $lname =$_POST['lastname'];
		// $email =$_POST['email'];
		// $msg =$_POST['subject'];

		$to='kilynhan206@gmail.com';
		$subject='testing sub';
		$message= "content";
		$headers="abcZ@gmail.com";

		if(mail($to, $subject, $message, $headers)){
			echo "Sent!";

		}
		else{
			echo "Didn't sent";
		}


	}






?>
