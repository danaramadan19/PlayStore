<?php
session_start();
//include('db.php');
$u = $_POST['email'];
$p = $_POST['password'];
$print="";
if (isset($_POST['submit'])) {

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "app_store";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    $email = $_POST['email'];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE email='{$email}' AND password='{$password}'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
      
                $_SESSION['uid'] = $u;
                $_SESSION['id'] = $i;
                header("location:index.php");//}
        }
    } else {
        echo "<script type='text/javascript'>alert('Your Login email or/and password is incorrect ☹💔');window.history.back(1);</script>";
        
    }

    mysqli_close($conn);
}
?>