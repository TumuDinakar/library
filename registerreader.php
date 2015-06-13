<html>
	<?php 
		include "connection.php";
		$reader_id=$_REQUEST['reader_id'];
		$name=$_REQUEST['name'];
		$address=$_REQUEST['address'];
		$phone_no=$_REQUEST['phone'];
		$button=$_REQUEST['submit_button'];
		echo "$reader_id";
		echo "$button";
		$check=false;
	
			$result=mysql_query("select * from reader where reader_id='$reader_id' or Ph_no='$phone_no'");
			$num_rows = mysql_num_rows($result);
			
			if( $num_rows > 0 ) 
			{
				$check=true;	
			}
			
			if($check==true)
			{
				
				echo ("<script>alert('Reader account is already exists'); window.location.href='addreader.php';</script>");
					
			}

			else
			{
				$sql = mysql_query("insert into reader(reader_id,Name,address,Ph_no) values('$reader_id','$name','$address','$phone_no')");
				echo ("<script>alert('Reader is added to database'); window.location.href='admin.php';</script>");
				
			}
	 ?>
</html>