<html>
	<head>
		
	</head>
	<body>
		<?php 
		include "connection.php";

		$reader_id=$_REQUEST['reader_id'];
		$book_id=$_REQUEST['book_id'];
		$branch_id=$_REQUEST['branch_id'];
		$copy_no=$_REQUEST['copies_no'];
		echo "$copy_no";
		echo "$reader_id";
		echo "$book_id";
		echo "$branch_id";
		$check=false;
		$result=mysql_query("select * from library_status 
			where book_id='$book_id' and branch_id='$branch_id' and copy_no='$copy_no'");
		$result1=mysql_query("select * from borrowers_details where book_id='$book_id' and reader_id='$reader_id'");
		$num_rows = mysql_num_rows($result);
		$num_rows1 = mysql_num_rows($result1);
			
			if( $num_rows > 0 && $num_rows1== '0' ) 
			{
				$check=true;
			}
			
			
			if($check==true)
			{

				$sql = mysql_query("insert into borrowers_details(book_id,copy_no,reader_id,branch_id,taken) values('$book_id','$copy_no','$reader_id','$branch_id','reserved')");
				$sql = mysql_query("update library_status set status='u' where book_id='$book_id' and branch_id='$branch_id' and copy_no='$copy_no'");
				echo("<script>alert('Successfully reserved the book'); window.location.href='index.php';</script>");
				
			}
			else
			{
				echo("<script>alert('you already have this book'); window.location.href='reader.php?reader_id=$reader_id';</script>");
			}
		 ?>
	</body>
</html>