<?php
include("database.php");

extract($_POST);
if(isset($save)){

$inputData = [
  'fullName'   => validate($fullName) ?? "",
'branch'   => validate($branch) ?? "",
'Linid'    => validate($Linid) ?? "",
'company'  => validate($company) ?? "",
'package'     => validate($package) ?? "",
];

$tableName= "vc";
$db = $conn;
$result= insert_data($db, $tableName, $inputData);

}

function insert_data($db, $tableName, $inputData){

 $data = implode(" ",$inputData);
if(empty($db)){
 $msg= "Database connection error";
}elseif(empty($tableName)){
  $msg= "Table Name is empty";
}elseif(trim( $data ) == ""){
  $msg= "Empty Data not allowed to insert";
}else{

    $query  = "INSERT INTO ".$tableName." (";
    $query .= implode(",", array_keys($inputData)) . ') VALUES (';
    $query .= "'" . implode("','", array_values($inputData)) . "')";
    $execute= $db->query($query);
   if($execute=== true){
  $msg= "Data was inserted successfully";
 }else{
  $msg= mysqli_error($db);
 }
}
 return $msg;

}

function validate($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}

?>