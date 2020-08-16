<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$comment=$_POST['comment'];

		$to='info@prexit.ru'; // Receiver Email ID, Replace with your email ID
		$subject='Регистрация пользователя на prexit.ru';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Email :".$email."\n"."Комментарий :"."\n\n".$comment;
		$headers="From: ".$email;


		if(mail($to, $subject, $message, $headers)){
			header('Location:success');
		}
		else{
			echo "Something went wrong!";
		}
		
	}
?>