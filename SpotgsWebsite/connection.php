<?php
$conn = mysqli_connect("localhost","root","","spotgs");
if(!$conn) {
	# code...
	echo "failed";
}
else
{
 echo "<html> <h1>Thank you for your response</h1></html>";
}



?>