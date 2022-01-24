<?php

			$host = "localhost";
			$user = "root";
			$password = "";
			$datbase = "demo";
			$link = mysql_connect($host,$user,$password);
			mysql_select_db($datbase);
	  
		  
     if(isset($_GET['delet_id']))
		{
			
				$edit=$_GET['delet_id'];

				 
				 //<?php echo $edit;
				 
				 $sql_query="DELETE  FROM person WHERE id =$edit";
				 $result_set=mysql_query($sql_query);
				 
				echo"deleted data succeefully";	
				
		}
	 header("Location: http://localhost/database/index.php");
?>
		 
		 
		 
		 
		