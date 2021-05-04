
function editdetails(){
    $.ajax({
        url: "display.php",
        type: "get",
        success : function(data, status){
            $('#record').html(data);

        }
    })
}

function updateUser(){
    console.log('hello');
    var firstname = $('#ufname').val();
    var lastname = $('#ulname').val();
    var email = $('#uemail').val();
    var contact = $('#ucontact').val();
    var username = $('#hidden_username').val();
    $.ajax({
        url: "update.php",
        type: "post",
        data: {Firstname : firstname,
            Lastname : lastname,
            Email: email,
            Contact : contact,
            Username : username,

        },
        success : function(data, status){
            console.log(data)
            display();
        }

    })

}
function get(username){
    console.log(username);
    $('#hidden_username').val(username);
     $.ajax({
         url : "getuser.php",
         type : "post",
         data : {Username : username},
         success : function(result, status){
             console.log(result);
             console.log("hello");
             var user = JSON.parse(result);
             $('#ufname').val(user.First_Name);
             $('#ulname').val(user.Last_Name);
             $('#uemail').val(user.Email);
             $('#ucontact').val(user.Contact);
         }
     })
     $('#u_myModal').modal("show");
 }

function getUser(username){
   console.log(username);
   $('#hidden_username').val(username);
    $.ajax({
        url : "getuser.php",
        type : "post",
        data : {Username : username},
        success : function(data, status){
            console.log(data)
            var user = JSON.parse(data);
            $('#ufname').val(user.Firstname);
            $('#ulname').val(user.Lastname);
            $('#uemail').val(user.Email);
            $('#ucontact').val(user.Contact);
        }
    })
    $('#u_myModal').modal("show");
}

function add(){
    console.log("hello");
}
function addUser(){
    console.log('hello');
    var firstname = $('#fname').val();
    var lastname = $('#lname').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    $.ajax({
        url: "add.php",
        type: "post",
        data: {Firstname : firstname,
            Lastname : lastname,
            Email: email,
            Contact : contact

        },
        success : function(data, status){
            display();
        }

    })
}

function display(){
    $.ajax({
        url: "data.php",
        type: "get",
        success : function(data, status){
            $('#record').html(data);

        }
    })

}
