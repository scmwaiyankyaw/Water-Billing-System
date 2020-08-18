<?php
if (isset($_POST['add']))
	{
	$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($conn,"waterbilling");

					$lname= $_POST['lname'] ;
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					$meterReader = $_POST['meterReader'];

		 mysqli_query($conn,"INSERT INTO  owners (lname,fname,mi,address,contact)
		 VALUES ('$lname','$fname','$mi','$address','$contact')");
		 mysqli_query($conn,"INSERT INTO  tempo_bill (Client,Prev)
		 VALUES ('$fname','$meterReader')");

				header("Location: clients.php");


	        }

?>
