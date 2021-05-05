<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.html");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User-Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type = "text/javascript" src = "app.js"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        display();
    })
</script>
</head>
<body>
<div >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <h5 style="color:White;">Welcome <?php  echo $_SESSION['username'];  ?></h5> 
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  User-Management
                </a>
                <div class="dropdown-menu">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal">
                        Add User
                      </button>
                      <button type="button" class="btn btn-light" onclick = "editdetails()">
                        Edit/Inactivate User
                      </button>
                  
                
                </div>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="return confirm('Are you sure?');">
                  Logout
                </a>
            </li>
           
        </ul>
    </nav>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add New User</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter first name" id="fname">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Last Name:</label>
                    <input type="text" class="form-control" placeholder="Enter last name" id="lname">
                  </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Contact:</label>
                    <input type="contact" class="form-control" placeholder="Enter contact" id="contact">
                  </div>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addUser()">Submit</button>

              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>

      <!-- Edit Modal-->
      <div class="modal" id="u_myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!--Edit  Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit </h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!--Edit  Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="u_fname">First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter first name" id="ufname">
                  </div>
                  <div class="form-group">
                    <label for="u_lname">Last Name:</label>
                    <input type="text" class="form-control" placeholder="Enter last name" id="ulname">
                  </div>
                <div class="form-group">
                    <label for="u_email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="uemail">
                  </div>
                  <div class="form-group">
                    <label for="u_pwd">Contact:</label>
                    <input type="text" class="form-control" placeholder="Enter contact" id="ucontact">
                  </div>
            </div>
      
            <!--Edit  Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateUser()">Submit</button>

              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type = "hidden" name = "" id = "hidden_username">
            </div>
      
          </div>
        </div>
      </div>
      <div id = "record" class = "container pt-3">

    </div>
</div>


 </body>
 </html>   