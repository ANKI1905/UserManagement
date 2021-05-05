<?php
include_once ('config.php');

$sql = "SELECT First_Name, Last_Name, Email, Contact, Username, Active FROM user_info ";
$result = $mysqli->query($sql);
$data = '<table class = "table table-bordered table-striped">
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>';
            while ($rows=$result->fetch_assoc())
            {
            $username = $rows['Username'];
            echo $username;
            if($rows['Active']){
            $data .='<tr>
                <td> '.$rows['First_Name'].' </td>
                <td> '. $rows['Last_Name'].' </td>
                <td> '.$rows['Email'].' </td>
                <td> '. $rows['Contact'].' </td>
                <td> <button  class = "btn btn-warning" onclick =  "get(\''.$username.' \');" > Edit </button>
                </td>
                <td> <button  class = "btn btn-danger" onclick =  "inactivateUser(\''.$username.' \');" > Inactivate </button>

            </tr>';
            }
            else {
                $data .='<tr>
                <td> '.$rows['First_Name'].' </td>
                <td> '. $rows['Last_Name'].' </td>
                <td> '.$rows['Email'].' </td>
                <td> '. $rows['Contact'].' </td>
                <td> <button  class = "btn btn-warning" onclick =  "get(\''.$username.' \');" > Edit </button>
                </td>
                <td> <button  class = "btn btn-success" onclick =  "activateUser(\''.$username.' \');" > Activate </button>
                </tr>';
            }
            } 
   
          
    $data .= '</table>';

echo $data;

           
?>