<?php
class Folders{
 
    // database connection and table name
    private $conn;
    private $table_name = "folders";
    private $userid='sample';
 
    // object properties
    public $FolderID;
    public $FolderName;
    Public $Owner;
 
 
    // constructor with $db as database connection
    public function __construct($db,$userid){
        $this->conn = $db;
        $this->userid = $userid;
        
    }
    // read products
    function read(){
         // select all query
        $query = "SELECT * FROM " . $this->table_name . " WHERE `Owner` = $this->userid "; 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function create($foldername){
        $tablename=$this->table_name;
        $query = 'INSERT INTO '. $tablename .'(`Folder_Name`,`Owner`) values ("'. $foldername. '","'.$this->userid.'")';
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function delete($FolderID){
        $tablename=$this->table_name;
        $query = 'Delete from '. $tablename .' where `folder_id`='. $FolderID;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt;
    }
}