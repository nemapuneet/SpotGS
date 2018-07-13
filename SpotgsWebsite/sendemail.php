<?php
if (isset($_POST['submitemail'])) {
	# code...
$email="";
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
$email=test_input($_POST["sign1"]);
echo $email;
$to=$email;
$subject= "Download link ";
$message ="Hello";
mail($to,$subject,$message);



}


?>