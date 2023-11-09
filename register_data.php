
<?php

$name = $_POST['name'];
$fname = $_POST['fname'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if (isset($name) && isset($phone) && isset($password)) {
    include "conn.php";
    $sql = "INSERT into `member`(`name`,`fname`,`phone`,`password`) VALUES ('$name','$fname','$phone','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        
        header("location:index.php");
    } else {
        header("location:register.php");
    }
}
?>
