<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connection.php";
        $logout_id = mysqli_real_escape_string($con, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($con, "UPDATE admin SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../dashboard.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../../dashboard.php");
    }
?>