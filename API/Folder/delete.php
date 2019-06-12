<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
session_start();

$foldername=$_POST['FolderID'];
$userID = $_SESSION['User_ID'];
include_once '../config/database.php';
include_once '../objects/folders.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$Folders = new Folders($db,$userID);

// query products
$stmt = $Folders->delete($foldername);
if($stmt==TRUE){
    echo json_encode(
        array("status" => "deleted")
    );
}
else{
    echo json_encode(
        array("status" => "failed",
        "Err"=> mysqli_stmt_error($stmt) )
    );
}


?>