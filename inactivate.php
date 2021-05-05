<?php
include_once ('config.php');
if (isset($_POST['Username']))
{	 
     $username = $_POST['Username'];
	 $sql = "UPDATE user_info SET Active = FALSE WHERE Username = '$username' ";


   
	 if (mysqli_query($mysqli, $sql)) {
		echo " record updated successfully !";
	 } else {
     echo "Error" . $sql . "
     " . mysqli_error($mysqli);
     

	 }
	 mysqli_close($mysqli);
}
?>