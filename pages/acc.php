<?php
//include('db_connection.php');

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
else{
    echo "Connected successfully";
}

if(isset($_GET['UserID'])){ 
    echo "Hello po";
    $UserID = $_GET['UserID'];
    $firstName = $_GET['firstname'];
    $middleName = $_GET['middlename'];
    $lastName = $_GET['lastname'];
    $contactNum = $_GET['contactnumber'];
    $emailX = $_GET['email'];
    $address = $_GET['address'];

    if ($firstName != ''|| $lastName !=''){
        $sql = "INSERT INTO account_information (`User_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Contact_Number`, `Email`, `address`) VALUES ('$UserID', '$firstName', '$middleName', '$lastName', '$contactNum', '$emailX', '$address')"; 
    }
   
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert(" user saved in user table ")</script>';
      header('Location: ../index.php');
    }   
    else {
        echo '<script>alert(" Not saved! ")</script>';
        echo "Error Message =". mysqli_error($conn);

    }   
        
    
}
?>