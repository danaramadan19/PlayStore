<?php 
 session_start(); 
 include "header.php"; 
//index.php
$connect = mysqli_connect("localhost", "root", "", "app_store");
$query = "SELECT AppName,Rating FROM google LIMIT 0,15";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ AppName:'".$row["AppName"]."', Rating:".$row["Rating"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

$connect2 = mysqli_connect("localhost", "root", "", "app_store");
$query2 = "SELECT AppName,RatingCount FROM google LIMIT 0,15";
$result2 = mysqli_query($connect2, $query2);
$chart_data2 = '';
while($row = mysqli_fetch_array($result2))
{
 $chart_data2 .= "{ AppName:'".$row["AppName"]."',RatingCount:".$row["RatingCount"]."}, ";
}
$chart_data2 = substr($chart_data2, 0, -2);

$connect3 = mysqli_connect("localhost", "root", "", "app_store");
$query3 = "SELECT AppName,AdSupported FROM google LIMIT 0,15";
$result3 = mysqli_query($connect3, $query3);
$chart_data3 = '';
while($row = mysqli_fetch_array($result3))
{
 $chart_data3 .= "{ AppName:'".$row["AppName"]."',AdSupported:".$row["AdSupported"]."}, ";
}
$chart_data3 = substr($chart_data3, 0, -2);

$connect4 = mysqli_connect("localhost", "root", "", "app_store");
$query4 = "SELECT AppName,MinimumInstalls,MaximumInstalls FROM google LIMIT 0,15";
$result4 = mysqli_query($connect4, $query4);
$chart_data4 = '';
while($row = mysqli_fetch_array($result4))
{
 $chart_data4 .= "{ AppName:'".$row["AppName"]."', MinimumInstalls:".$row["MinimumInstalls"].", MaximumInstalls:".$row["MaximumInstalls"]."}, ";
}
$chart_data4 = substr($chart_data4, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>charts </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Store</title>

    <link rel="shortcut icon" href="img/pic1.png" type="image/x-icon">

    <link rel="stylesheet" href="style/style.css" >

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/swiper-bundle.min.css" >

 </head>
 <body style="background-color:#211c33">

 <header>
 <div class="nav container">
        <a href="index.html" class="logo">Play<span style="color: #F93648;">Store</span></a>

        <div class="nav-icons">
        <a href="index.php" >   <i class='bx bxs-home-circle'></i></a>
          
       <a href="profile1.php" >  <i  class='bx bx-user ' ></i> </a>
       <a href="chart.php" > <i class='bx bx-chart' ></i> </a>

            <div class="menu-icon">
<div class="line1"></div>
<div class="line2"></div>
<div class="line3"></div>
            </div>
        </div>

        <div class="menu">
            <img src="img/pic1.png" alt="">
       

            <div class="navbar">
          
            <?php
    if(isset($_SESSION['uid']))
        {
            ?>
             <li > <a>&nbsp;&nbsp;HI 🙋‍♀<?php echo $_SESSION['uid']; ?> </a></li>&nbsp;&nbsp;

     
       <?php                      
     }
    ?>  
            
             <li> <a href='index.php?c=all'>All Apps</a></li>
             <li>  <a href='contactus.php'>Contact us</a></li>
             <li>  <a href='logout.php?uid="<?php echo $_SESSION['uid']; ?>"'>Log Out</a></li>  
               
               
              
            </div>
        </div>

      
        </div>

    </div>
</header>

<Center> <table style="padding-top: 50px" >
<tr>
<td> 
  <br /><br />
  <div class="container" style="width:400px; hight:300px;">
   <h3 align="center" style="color:white">Apps Name with their Rating</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
</td>
<td>
  <br /><br />
  <div class="container" style="width:400px; hight:300px;">
   <h3 align="center" style="color:white">Apps Name with their installCount</h3>   
   <br /><br />
   <div id="chart4"></div>
  </div> 
</td>
</tr>

<tr>
<td>
  <br /><br />
  <div class="container" style="width:400px; hight:300px;">
   <h3 align="center" style="color:white">Apps Name with their RatingCount</h3>   
   <br /><br />
   <div id="chart2"></div>
  </div>
</td>
<td>
  <br /><br />
  <div class="container" style="width:400px; hight:300px;">
   <h3 align="center" style="color:white">Apps Name with their AdSupported</h3>   
   <br /><br />
   <div id="chart3"></div>
  </div>
</td> 
</tr>
</table></Center>
<h1 class="credit"> created by <strong> Advanced Group </strong> | all rights reserved! </h1>

<script src="js/swiper-bundle.min.js"></script>
    <script src="js/java.js"></script>
 </body>
</html>



<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'AppName',
 ykeys:['Rating'],
 labels:['Rating'],
 hideHover:'auto',
 stacked:true
});

Morris.Bar({
 element : 'chart2',
 data:[<?php echo $chart_data2; ?>],
 xkey:'AppName',
 ykeys:['RatingCount'],
 labels:['RatingCount'],
 hideHover:'auto',
 stacked:true
});

Morris.Bar({
 element : 'chart3',
 data:[<?php echo $chart_data3; ?>],
 xkey:'AppName',
 ykeys:['AdSupported'],
 labels:['AdSupported'],
 hideHover:'auto',
 stacked:true
});

Morris.Bar({
 element : 'chart4',
 data:[<?php echo $chart_data4; ?>],
 xkey:'AppName',
 ykeys:['MinimumInstalls','MaximumInstalls'],
 labels:['Min','Max'],
 hideHover:'auto',
 stacked:true
});
</script>