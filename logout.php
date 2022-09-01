<?php
session_start();
if(isset($_SESSION['uid'])&& $_SESSION['uid']!="")
{
    $_SESSION['uid']="";
    unset($_SESSION['uid']);
    session_destroy();
    header("location: account.html");

}
else
{
    header("location: account.html");
}
?>