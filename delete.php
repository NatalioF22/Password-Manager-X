<?php

$connection = mysqli_connect("localhost","Natalio","");
$db = mysqli_select_db($connection,"PM");

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query =  "DELETE FROM Data WHERE id = '$id'";
    
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo "Done";
        header('Location:passwords.php');
    }else{
        echo "Not Done";
    }

}

?>