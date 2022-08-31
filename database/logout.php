<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $logoutuser_id=mysqli_real_escape_string($conn,$_GET['logoutuser_id']);
    if(isset($logoutuser_id)){
        $status="Offline now";
        $sql=mysqli_query($conn,"UPDATE users SET status='{$status}' WHERE unique_id='.{$logoutuser_id}.' ");
        if($sql){
            session_unset();
            session_destroy();
            header("Location:.././page/login.php");
            
        }else{
            header("Location:.././page/user.php");
        }
    }
}else{
    header("Location:index.php");
}

?>