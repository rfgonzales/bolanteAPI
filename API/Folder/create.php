<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$foldername=$_POST['newFolderName'];
$Owner=$_POST['Owner'];
include_once '../config/database.php';
include_once '../objects/folders.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
$userID= $_POST['user_id'];
// initialize object
$Folders = new Folders($db,$userID);

// query products
$stmt = $Folders->create($foldername,$Owner);
if($stmt){

}
else{
    
}


?>