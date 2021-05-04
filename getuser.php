<?php
 include_once ('config.php');
 if (true){
    $username = $_POST['Username'];
    $sql = "SELECT * FROM  user_info WHERE Username = '$username' ";
    if(!$result = mysqli_query($mysqli, $sql)){
        exit(mysqli_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
    }
    else{
        $response['status'] = 200;
        $response['message'] = "Data not found";
    }
    echo json_encode($response);
 }


 ?>