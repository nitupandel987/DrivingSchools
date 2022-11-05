<?php

$hname='localhost';
$uname='root';
$pass='';
$db='drivingschool';  

$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die("cannot connect to database".mysqli_connect_error());

}

function filteration($data){
    foreach($data as $key => $value){
        // trim();
        // stripcslashes();
        // htmlspecialchars();
        // strip_tags();
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes){
    $con = $GLOBALS['con'];
    
    if($stmt = mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt, $datatypes,...$values);
     if(mysqli_stmt_execute($stmt)){
       $res =  mysqli_stmt_get_result($stmt);
       mysqli_stmt_close($stmt);
        return $res;
     }

     else{
        myqli_stmt_close($stmt);
        die("Query Cannot be executed - Select");
     }

    
    }
    else{
        die("Query Cannot be Prepared - Select");
    }
}
?>

