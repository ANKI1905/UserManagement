<?php
include_once ('config.php');
if (isset($_POST['Firstname']) && isset($_POST['Lastname']) && isset($_POST['Email']) && isset($_POST['Contact']))
{	 
	 $first_name = $_POST['Firstname'];
	 $last_name = $_POST['Lastname'];
	 $contact = $_POST['Contact'];
	 $email = $_POST['Email'];
     $username = $_POST['Username'];

     echo $first_name;
	 echo $last_name;
	 echo $contact;
	 echo  $email;


	 $sql = "UPDATE user_info SET First_name = '$first_name', Last_name = '$last_name', Email = '$email', Contact = '$contact' WHERE Username = '$username' ";


   
	 if (mysqli_query($mysqli, $sql)) {
		echo " record updated successfully !";
	 } else {
     echo "Error" . $sql . "
     " . mysqli_error($mysqli);
     

	 }
	 mysqli_close($mysqli);
}
?>