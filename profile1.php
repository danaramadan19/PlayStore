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
    <title>Profile</title>
    <link rel="stylesheet" href="css/design.css">
</head>
<body>
<nav>
<a class="nav" ; style=' padding: 20px;position:absolute; color: #3BC6F8;top:0.01px;left:0px;text-decoration: none;'  href="index.php"> Home </a>
    <a class="nav" ; style='padding: 20px;position:absolute; color: #3BC6F8;top:0.01px;left:120px;text-decoration: none;'  href="profile1.php"> Edit Profile </a>
    <a class="nav" ; style=' padding: 20px;position:absolute; color: #3BC6F8; top:0.01px;left:300px;text-decoration: none;'  href="Fav.php"> Favorite List </a>
</nav>
<br><br><br><br>
<div style="height: 30px " ></div>
<div >
    <div class="card-body">
        <div class="account-settings">
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Maxwell Admin">
                </div>
                <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "app_store";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
       
        $s = mysqli_query($con,"select * from login where email='$u'");
        if($r = mysqli_fetch_array($s))
        {
          $i=$r['id'];
           
            ?>
                <h5 class="user-name" style="font-size: larger"><?php echo $r['firstName']; ?><?php echo " ".$r['lastName']; ?></h5>
                <h6 class="user-email" style="font-size:medium" ><?php echo $r['email']; ?></h6>
                <?php
        }
        ?>
            </div>
        </div>
    </div>
</div>
<div style="height: 70px " ></div>
<h6  align="center" >Personal Details</h6>
<div style="height: 20px " ></div>
<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "app_store";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
       
        $s = mysqli_query($con,"select * from login where email='$u'");
        if($r = mysqli_fetch_array($s))
        {
          $i=$r['id'];
           
            ?>
            
           
<form action="" method="post" enctype="multipart/form-data" >
<div   align="center">
    <br>
<table style='background-color: rgba(44, 47, 58, 0.8) ;' class='table sticky'>
    <tr  style='border: 2px solid black;font-weight:bold'>
      <td style='background-color:hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
          <label for="fullName">First Name</label>
      </td>
        <td style='background-color:  hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
            <input type="text" class="form-control" id="fullName" name="firstName" value="<?php echo $r['firstName']; ?>" style='height: 30px;' >
        </td>
    </tr>

    <tr  style='border: 2px solid black;font-weight:bold'>
        <td style='background-color:hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
            <label for="fullName">Last Name</label>
        </td>
          <td style='background-color:  hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
              <input type="text" class="form-control" id="fullName" name="lastName" value="<?php echo $r['lastName']; ?>"style='height: 30px;' >
          </td>
      </tr>
  
    <tr style='border: 2px solid black;font-weight:bold'>
        <td style='background-color: hsl(227, 14%, 20%,0.8) ;font-weight: 500;height: 20px;'>
    <label for="eMail">Email</label>
        </td>
        <td style='background-color: hsl(227, 14%, 20%,0.8) ;font-weight: 500;height: 20px;'>
    <input type="email" class="form-control" id="eMail" name="email"value="<?php echo $r['email']; ?>" style='height: 30px;'>
        </td>
    </tr>

    <tr style='border: 2px solid black;font-weight:bold'>
        <td style='background-color: hsl(227, 14%, 20%,0.8) ;font-weight: 500;height: 20px;'>
    <label for="Country">Age</label>
        </td>
        <td style='background-color:hsl(227, 14%, 20%,0.8) ;font-weight: 500;height: 20px;'>
    <input type="text" class="form-control" id="Country" name="age" value="<?php echo $r['age']; ?>"style='height: 30px;'>
        </td>
    </tr>
    <tr  style='border: 2px solid black;font-weight:bold'>
        <td style='background-color:hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
            <label for="fullName">interest</label>
        </td>
          <td style='background-color:  hsl(227, 14%, 20%,0.8); ;font-weight: 500;height: 20px;'>
              <input type="text" class="form-control" id="fullName" name="interests" value="<?php echo $r['interests']; ?>"style='height: 30px;' >
          </td>
      </tr>
  
</table>
    <br>
</div>
<div style="height: 20px " ></div>
<div align="center">
    <input  style=' text-align:center; font-weight: 1000;height: 50px; background: rgba(44, 47, 58, 0.8)' type="button" id="id" class="form-control" name="cancel" value="Cancel" onclick=""></input>

    <input  style=' text-align:center; font-weight: 1000;height: 50px; background: rgba(44, 47, 58, 0.8)' type="submit" class="form-control" name="submit" value="Update" ></input>

</div>
</form>
<?php
        }
        ?>
<?php
    if(isset($_POST['submit']))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "app_store";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
      //  $id=$_POST['id'];
    
        $fn = $_POST['firstName'];
        $ln = $_POST['lastName'];
        $em = $_POST['email'];
        $ag = $_POST['age'];
        $inte = $_POST['interests'];
        $sql = "UPDATE login SET firstName='$fn', lastName='$ln', email='$em', age='$ag', interests='$inte' WHERE id='$i'";

        mysqli_query($con,$sql);
        echo "<div style='text-align:center; font-size:1.3em; color:red;'>Data Updated SuccessFully</div>";

    }
    ?>


</body>
</html>