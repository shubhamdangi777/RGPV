<?php require_once "../../registration/controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$path="../image/";
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $verified = $fetch_info['verified'];
        $code = $fetch_info['code'];
        $unique_id=$fetch_info['unique_id'];
        $img=$fetch_info['img'];
        $name=$fetch_info['name'];
        if($verified == "verified"){
            if($code != 0){
                header('Location: ../registration/reset-code.php');
            }
        }else{
            header('Location: ../registration/user-otp.php');
        }
    }
}else{
    header('Location: ../registration/index.php');
}
$select_sql2 = mysqli_query($con, "SELECT * FROM usertable WHERE email = '{$email}'"); $result = mysqli_fetch_assoc($select_sql2); $_SESSION['unique_id'] = $result['unique_id'];


?>
