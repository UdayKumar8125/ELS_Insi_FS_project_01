<?php
session_start();

//Database connection
$require = "Set";
function db_connect(){
	// Database Varriables
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "uday";

	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
	else{

		return $conn;
	}
}

function login(){
  
  $conn=db_connect();

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }
    }else{



}
}

function registration(){
	 $conn=db_connect();
	 echo "test";
	if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into user1 (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
       	$result = mysqli_query($conn,$query) or die(mysql_error());

        if($result ==1){
            echo "You are registered successfully.";
        }
    }

}

 