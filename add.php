<?php
include_once ('config.php');
if (isset($_POST['Firstname']) && isset($_POST['Lastname']) && isset($_POST['Email']) && isset($_POST['Contact']))
{	 
	 $first_name = $_POST['Firstname'];
	 $last_name = $_POST['Lastname'];
	 $contact = $_POST['Contact'];
	 $email = $_POST['Email'];

     echo $first_name;
	 echo $last_name;
	 echo $contact;
	 echo  $email;

     $bytes = openssl_random_pseudo_bytes(2);

     $pwd = bin2hex($bytes);
	 $sql = "INSERT INTO user_info (First_name,Last_name, Email, Contact, Username, Password, Active)
	 VALUES ('$first_name','$last_name','$email', '$contact', '$email', '$pwd', TRUE )";


   
	 if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully !";
	 } else {
     echo "Error" . $sql . "
     " . mysqli_error($mysqli);
     

	 }
	 mysqli_close($mysqli);
}
?>