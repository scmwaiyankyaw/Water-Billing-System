<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "waterbilling";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 if (!$conn)
	{
 die('Could not connect: ' . mysql_error());
}
 mysqli_select_db($conn, $dbname);
