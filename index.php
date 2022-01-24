<?php include 'add_data.php'; ?>

<!DOCTYPE html>
<html lang="eng">
	<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Add Employee</title>
	</head>
	
<body>
<div class="container">
	<form method="post" action="add_data.php">
	      <div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required />
		</div> 
		 <div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="last Name" required  />
		</div> 
		<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"placeholder="Valid email id" required />
		</div>
		<div class="form-group">
		<label>Department</label>
		<input type="text" name="department" placeholder="department" required  />
		</div>
        <div class="form-group">
		<button type="submit" name="submit"/><strong> SAVE </strong></button>
		</div>  
	</form>
<?php 
		echo "<table  class='table' >"; 
		echo " <tr>";  
		echo"<th>ID&nbsp&nbsp</th>" ;

		echo"<th>First_name&nbsp&nbsp</th>" ;

		echo"<th> Last_name&nbsp</th>";

		echo"<th> Email ID</th>" ;

		echo"<th>Department</th><br>"; 


		echo "<tbody>";

		$sql_query = "SELECT * FROM person";
		$result_set=mysql_query($sql_query);


		while($row=mysql_fetch_row($result_set))
		{

		echo "<td>";
		echo $row['0'];
		echo "</td> ";


		echo "<td>";
		echo $row['1'];
		echo "</td> ";

		echo "<td>";
		echo $row['2'];
		echo "</td> ";

		echo "<td>";
		echo $row['3'] ;
		echo "</td> " ;

		echo "<td>";
		echo $row['4'] ;
		echo "</td> " ;

		echo "<td>";
			?>
			 <a  href="Edit.php? edt_id=<?php echo $row['0'];?>">; 
			<?php echo '<img src="img/icon/pencil-icon.png" alt="Update" width="25" height="25">
			 &nbsp&nbsp&nbsp&nbsp&nbsp</a>';
		 
		echo "</td>";
		?>
		
		
		 <?php echo "<td>"?>;
			 <a  href="delete.php? delet_id=<?php echo $row['0'];?>">; 
			<?php echo '<img src="img/icon/Delete-icon.png" alt="Update" width="25" height="25">
			 &nbsp&nbsp&nbsp&nbsp&nbsp</a>';
		echo "</td>";
            

		echo " </tr>";


		}

			echo "</tbody>";
			   
			echo "</table>"; 
		?>

</div>
	</body>
</html>