<?php session_start(); ?>
<?php
    if(isset($_SESSION['uid']))
        {
           
             $u= $_SESSION['uid'];
         
            
                          
     }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAVORITE LIST</title>
    <link rel="stylesheet" href="css/design2.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" >
</head>
<body>
<nav>

<a class="nav" ; style=' padding: 20px;position:absolute; color: #3BC6F8;top:0.01px;left:0px;text-decoration: none;'  href="index.php"> Home </a>
    <a class="nav" ; style='padding: 20px;position:absolute; color: #3BC6F8;top:0.01px;left:120px;text-decoration: none;'  href="profile1.php"> Edit Profile </a>
    <a class="nav" ; style=' padding: 20px;position:absolute; color: #3BC6F8; top:0.01px;left:300px;text-decoration: none;'  href="Fav.php"> Favorite List </a>

</nav>
<br>
<section class="trendy container" id="apps">
<div class="heading">
    <i class='bx bxs-flame'></i>
    <h2>All Apps</h2>
</div>
<div class="trendy-content">
    
<?php
                                $host = "localhost";
                                $dbUsername = "root";
                                $dbPassword = "";
                                $dbName = "app_store";
                                $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
                               
                                $s = mysqli_query($con,"select * from fav where idu='$u'");
                                while($r = mysqli_fetch_array($s))
                                {
                                  $i=$r['id'];
                                   
                                    ?>
                               
								
                <div class="itemBox">
        <img src="img/pic1.png" alt="pubge">
        <div class="box-text">
        <h2><?php echo $r['name']; ?></h2>
        <h3><?php echo $r['category']; ?></h3>
        
        <div class="rate-down-price">
        <div class="rating">
        <i class='bx bxs-star'></i>
        <span><?php echo $r['rate']; ?></span>
        
        </div>
        
        <div class="price">
        <i class='bx bx-dollar'></i>
        <span><?php echo $r['price']; ?></span>
        
        </div>
        <a href='Fav.php?nn=<?php echo $r['name']; ?>'  class="box-btn"><i class='bx bxs-message-square-x'></i></a>
        </div>
        </div>
        
        



        </div>
								
                                    <?php } ?>
   </section>                                 

<?php

if(isset($_GET['nn']))
{

    
  
    $na = $_GET['nn'];
   

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "app_store";
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    mysqli_query($con,"DELETE FROM fav WHERE `name`='$na'") or die(mysqli_error($con));
    echo "<script type='text/javascript'>alert('Your data Is Deleted Successfully ')</script>";

}?>              
        

</body>
</html>