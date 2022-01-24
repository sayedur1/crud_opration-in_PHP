<?php

$host = "localhost";
$user = "root";
$password = "";
$datbase = "demo";
 $link = mysql_connect($host,$user,$password);
  mysql_select_db($datbase);

//$edt_id=$row[0];
if(isset($_GET['edt_id']))
{
	
$edit=$_GET['edt_id'];

 
 //<?php echo $edit;
 
 $sql_query="SELECT * FROM person WHERE id =$edit";
 $result_set=mysql_query($sql_query);

 
 
 
 
 while($row=mysql_fetch_row($result_set))
 {
      
 
		$F_name= $row['1'];
	
		
		
       
		$L_name=$row['2'];
		
        
        
		$email= $row['3'];
		
		
        
		$depart= $row['4'] ;
		
		
		
	
		
	
}

}
 
if(isset($_POST['btn-update']))
{
	
$host = "localhost";
$user = "root";
$password = "";
$datbase = "demo";
 $link = mysql_connect($host,$user,$password);
  mysql_select_db($datbase);
  
	echo "entered <br>";


 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
  $email_name = $_POST['email'];
 $depart_name = $_POST['department'];
 // variables for input data
   // echo "$first_name <br>";
	
	//echo $edit ;
 // sql query for update data into database
 $sql_query = "UPDATE person SET first_name= '$first_name', last_name= '$last_name', email= '$email_name', department='$depart_name' WHERE id= '$edit'";
 // sql query for update data into database
  $result_set=mysql_query($sql_query);
  
  

	
 // sql query execution function
 // sql query execution function
 //echo"successfully updated"; 
 header("Location: http://localhost/database/index.php");
}
?>
<!DOCTYPE html PUBLIC >
<html >
<head>

<title>CRUD Operations With PHP and MySql </title>

</head>
<body>
<center>

<div id="header">
 <div id="content">
    <h2>ENTER NEW VALUE </h2>
    </div>
</div>

<body>
 
    <form method="post" action="">
    <table align="center">
    <tr>
	
    <td> First name<input type="text" name="first_name"  placeholder="<?php echo $F_name; ?>" required /></td>
    </tr>
    <tr>
	
    <td>Last name<input type="text" name="last_name"  placeholder="<?php echo $L_name; ?>" required /></td>
    </tr>
    <tr>
    <td> Email Id <input type="text"name="email"  placeholder="<?php echo $email; ?>" required /></td>
    </tr>
	<tr>
    <td>Department<input type="text"name="department"  placeholder="<?php echo $depart; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
   
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>


</body>
</html>