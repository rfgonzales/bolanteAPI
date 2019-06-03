<?php
$servername = "localhost";
$usernameY = "root";
$password = "";
$dbname = "gabby";

// Create connection

$conn = new mysqli($servername, $usernameY, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
    
    
} 
if(isset($_GET['User_ID'])){
    
    $User_ID = $_GET['User_ID'];
    
    

    $sql = "UPDATE users SET statuss = 1 WHERE User_ID = '$User_ID' ";
    
    $result = $conn-> query($sql);
    
    header('Location: tryTable.php');

    if($result){
        return 'data updated';
        
        
    }
    else{
        
    }


}


?>
