<?php 
session_start();
require ('connection.php');
	
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$user_type=$_POST['user_type'][0];

		if($user_type=="House Owner")
		{
			$fi=$user->LoginHouseOwner($email, $password);
			if($fi['house_owner_email']==$email && $fi['house_owner_password']==$password)
			{
				echo "successfull owner";
				$_SESSION['email']=$email;
				$_SESSION['id']=$fi['house_owner_id'];
				$_SESSION['user_type']=$user_type;

				header("location:index_logged_in.php");
			}
			else
			{
				echo "invalid";
			}
		}

		if($user_type=="Customer")
		{
			$fifa=$user->LoginCustomer($email, $password);
			if($fifa['customer_email']==$email && $fifa['customer_password']==$password)
			{
				echo "successfull customer";
				$_SESSION['email']=$email;
				$_SESSION['id']=$fifa['customer_id'];
				$_SESSION['user_type']=$user_type;

				header("location:index_logged_in.php");
			}
			else
			{
				echo "invalid";
			}
		}

		
		
		/*$fi=$user->Login($email,$password);

		//$id=$fi['user_id'];
		//$admin = $user->admin_check($id);


		

       
		
		if($fi['user_email']==$email && $fi['user_password']==$password)
		{
			echo "valid user";

			
			
			
			$_SESSION['email']=$email;
			$_SESSION['id']=$fi['user_id'];
			$id=$_SESSION['id'];

			header("location:profile.php?id=$id");
			

			
			//header ("location:profile.php?id=$id");
		}
		else
		{
			echo "Invalid username or password";
		}*/
		
		
		
		
		
		
			
		
		
		
		
	}
	
	
	
	



?>