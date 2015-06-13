<!DOCTYPE html>
<html>
<?php
	include "connection.php";
	  
    $readerid=$_REQUEST['reader_id'];
	$check=false;
	
			$result=mysql_query("select * from reader where reader_id='$readerid'"); 
			$num_rows = mysql_num_rows($result);
			
			if( $num_rows > 0 ) 
			{
				$check=true;
				while($row=mysql_fetch_array($result))
				{
					$reader_id=$row['reader_id'];
					echo $status;
				}
				
			}
			
			if($check==true)
			{
				header("Location:reader.php?reader_id=$reader_id");
				
			}
			
			
			else
			{
				echo("<script>alert('Enter correct id'); window.location.href='index.php';</script>");
				
			}
	
?>
</html>