<?php

$id_user = $_GET["id_user"]; 

$query_name = mysqli_query($connections, "SELECT * FROM tbl_user WHERE id_user='$id_user' ");

$row = mysqli_fetch_assoc($query_name);


$db_first_name = $row["first_name"];
$db_middle_name = $row["middle_name"];
$db_last_name = $row["last_name"];
$db_gender = $row["gender"];

$gender_preffix = "";

if ($db_gender == "Male") {
    $gender_preffix = "Mr.";
} else {
    $gender_preffix = "Ms.";
}

$full_name = $gender_preffix . " " . ucfirst($db_first_name) . " " . ucfirst($db_middle_name[0]) . ". " . ucfirst($db_last_name);

if (isset($_POST["btnDelete"])) {

    mysqli_query($connections, "DELETE FROM tbl_user WHERE id_user='$id_user'");

    $notify_message = urlencode("$full_name has been successfully deleted!");
    
    echo "<script>window.location.href='ViewRecord.php?notify=$notify_message';</script>";
}


?>

<br>
<br>
<br>

<center>
    <form method="POST">
        <h4> You are about to delete this user: <font color="red"><?php echo $full_name; ?></font> </h4>
        <input type="submit" name="btnDelete" value="Confirm" class="btn-primary"> &nbsp; &nbsp; <a href="?" class="btn-delete"> Cancel</a>
    </form>
</center>