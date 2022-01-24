
   
    <?php
 $sql_query = "SELECT * FROM person";
 $result_set=mysql_query($sql_query);
 $res = mysql_affected_rows($result_set);
 
 echo"<table >"
 echo<tr><th>First_name</th>  th>last_name</th> th>Email</th> th>Department</th> </tr>;
 
 while($row=mysql_fetch_row($res))
 {
  
        
        echo <tr><td> $row[first_name]</td> </td>;
		
		echo <tr><td> $row[last_name]</td> </td>;
		echo <tr><td> $row[email]</td> </td>;
		echo <tr><td> $row[department]</td> </td>;
		
        
  
       
 }
 
       
 </table>
 
 ?>