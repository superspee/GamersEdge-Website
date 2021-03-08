<table name="a" border="2" celpadding="1" cellspacing="1">
	<tr>
		<th> First Name </th>
		<th> Last Name </th>
	</tr>



<?php
$db=mysqli_connect('localhost','root','','dbse');
 $query="SELECT * FROM tb";
 $result=mysqli_query($db,$query);
 if($result){


 while($row=mysqli_fetch_assoc($result)){
     
     echo"<tr>";
     echo"<td>".$row['fname']."</td>";
      echo"<td>".$row['sname']."</td>";
    
                     echo"</tr>";
 }
 else {
echo  	"connection failed";
 }
                      
                       
 
 
 ?>
 </table>