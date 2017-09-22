<?php 

	if(isset($_POST['submit'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message']


		mail($email,'Contact from Portfolio',$message,'From: $email \r\n');
	}









 ?>