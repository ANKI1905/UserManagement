<?php
include_once ('config.php');

if(isset($_POST['Submit']))
{	 
	 $user_name = $_POST['Username'];
	 $password =  $_POST['Password'];
}
$sql = "select * from user_info where Username = '$user_name' and Password = '$password'";  
$result = mysqli_query($mysqli, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
echo $user_name;
echo $password;
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>"; 
    header("Location: dashboard.php");
    exit; 
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>"; 

} 

?>