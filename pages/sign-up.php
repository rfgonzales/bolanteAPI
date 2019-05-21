<!DOCTYPE html>
<html>

<head>


    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Document Management System</title>
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
                <form id="next" method="POST" action = "account-info-sign-up.php">
                    <div class="msg">Register a new membership</div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">star</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="UserID" placeholder="User ID" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Name Surname" required autofocus>
                        </div>
                    </div>

                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Next</button>
        
                    

                        
                        
                        
                    <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gabby";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['UserID'], $_POST['namesurname'], $_POST['password'])){
    $UserID = $_POST['UserID']; 
    $username = $_POST['namesurname'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (`User_ID`, `username`, `password`) VALUES ('$UserID', '$username', '$password')";
    header("localhost/gabby");

    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
    }
     else {
   echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


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