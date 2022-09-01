<?php
$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'appstore' ) or die(mysqli_error($db));
session_start();
global $id;
if(isset($id)) {
    $id = $_POST['id'];
}
$query=mysqli_query($db,"SELECT * FROM favourite where id='$id'")or die(mysqli_error($db));
$row=mysqli_fetch_array($query);
if(isset($_POST['unFav'])){

    $query="DELETE FROM favourite WHERE id='$id'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        echo '<script>alert("Application deleted")</script>';
        header("location:Fav.html");
    }else{
        echo '<script>alert("Application not deleted")</script>';

    }
}

?>
