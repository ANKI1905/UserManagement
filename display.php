<?php
include_once ('config.php');

$sql = "SELECT First_Name, Last_Name, Email, Contact, Username FROM user_info ";
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
            $data .='<tr>
                <td> '.$rows['First_Name'].' </td>
                <td> '. $rows['Last_Name'].' </td>
                <td> '.$rows['Email'].' </td>
                <td> '. $rows['Contact'].' </td>
                <td> <button onclick = "editdetails('.$rows['Username'].')"
                      class = "btn btn-warning"> Edit </button>
                </td>
            </tr>';
            } 
   
          
    $data .= '</table>';

echo $data;

           
?>