<?php
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'login2';
	$link = mysqli_connect($host, $user, $password, $database);
	// echo 'hello';
	 if(isset($_POST['submit'])) {
		$uname = $_POST['username'];
		$password = $_POST['password'];
		// echo 'hello2';
		$result = mysqli_query($link, "select * from user_master where username= '".$uname."' and password = '".$password."' Limit 1")
			or die ("invalid credentials.". mysqli_error());
		$row = mysqli_fetch_array($result);
		if($row['username'] == $uname && $row['password'] == $password) {
			echo 'Login seccessful. Welcome '.$uname;
		}else{
			echo "Failed to login!";
		}
		
	 }
	
	// $username = $_POST['user'];
	// $password = $_POST['pass'];

	// $username = stripcslashes($username);
	// $password = stripcslashes($password);
	// $username = mysqli_escape_string($username);
	// $password = mysqli_escape_string($password);
	
	// mysql_connect("localhost", "root", "");
	// mysql_select_db("login");

	// $result = mysqli_query("select * from users where username ='$username' and password = '$password'")
				// or die("Failed to query database ".mysql_error());
	// $row = mysqli_fetch_array($result);
	// if ($row['username'] == $username && $row['password'] == $password){
		// echo "Login success!!! Welcome ". $row['username'];
	// } else {
		// echo "Failed to login!";
	// }

?>