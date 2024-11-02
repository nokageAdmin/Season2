<?php


session_start();

include("../connections.php");

if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];

    $authention = mysqli_query($connections, "SELECT * FROM tbl_user WHERE email='$email' ");
    $fetch = mysqli_fetch_assoc($authention);
    $account_type = $fetch["account_type"];

    if($account_type !=1) {
        echo "<script>window.location.href='../Forbidden';</script>";
    }
}


include("nav.php");


?>