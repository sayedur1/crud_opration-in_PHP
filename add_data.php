<?php 

$host = "localhost";
$user = "root";
$password = "";
$datbase = "demo";
 $link = mysql_connect($host,$user,$password);
  mysql_select_db($datbase);

if($link === false){
   echo "Could not connect "; ;
}
else
//echo "Connected successfully";


if(isset($_POST['submit']))
{
 // variables for input data
 
 
		 
		 $first_name = $_POST['first_name'];
		 $last_name = $_POST['last_name'];
		 $email_name = $_POST['email'];
		 $depart_name = $_POST['department'];
		 
				 
	     //$email = "john.doe@example.com";

		// Validate email
		if (!filter_var($email_name , FILTER_VALIDATE_EMAIL) === false)
			{
			
			} 
		else {
				echo("Please enter a valid email address");
				//header("Location: http://localhost/database/index.php");
			
			}
	
		 // variables for input data
		 
		 // sql query for inserting data into database
		 
		 $sql_query = "INSERT INTO person(first_name,last_name,email,department) VALUES('$first_name','$last_name','$email_name','$depart_name')";
		 mysql_query($sql_query);
				
	



 //$res = mysql_affected_rows($result_set);
 
 //print_r($result_set);
 //exit();
 
  header("Location: http://localhost/database/index.php");   
	
}

    

 
?>