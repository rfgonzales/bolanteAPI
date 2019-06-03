<!DOCTYPE html>
<html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gabby";
$UserID = $_POST['UserID'];
$usernameZ ;
$passwordZ ;


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['UserID'], $_POST['username'], $_POST['password'] )){
    $UserID = $_POST['UserID']; 
    $usernameZ = $_POST['username'];
    $passwordZ = $_POST['password'];
    $account_type = 2;
    $status = 3;
    $sql = "INSERT INTO users (`User_ID`, `username`, `password`, `account_type`, `statuss`) VALUES ('$UserID', '$usernameZ', '$passwordZ', '$account_type', '$status')"; 

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert(" user saved in user table ")</script>';
    }
     else {
      echo '<script>alert(" Not saved! ")</script>';
    }
    
}


$conn->close();

?>
<head> 
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Account Information | Document Management System</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="signup-page">



    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Gabby</b></a>
            <small>Document Management System</small>
        </div>
        
        <div class="card">
            <div class="body">
                <form id="sign_up" method="GET" action='acc.php'>
                    <div class="msg">Register a new membership</div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">star</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="UserID" value = '<?php echo $UserID ?>' readonly>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required autofocus>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">contact_phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="contactnumber" minlength="6" placeholder="Contact Number" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">place</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" placeholder="Address" required autofocus>
                        </div>
                    </div>

                    

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    


                </form>
            </div>
        </div>
    </div>
    

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-up.js"></script>
</body>

</html>