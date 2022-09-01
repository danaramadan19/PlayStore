<?php session_start(); ?>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Store</title>
    <link rel="stylesheet" href="bootstrap.css">


    <link rel="shortcut icon" href="img/pic1.png" type="image/x-icon">

    <link rel="stylesheet" href="style/style.css" >

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/swiper-bundle.min.css" >
</head>
<body>
<header>
    <div class="nav container">
        <a href="index.html" class="logo">Play<span style="color: #F93648;">Store</span></a>

        <div class="nav-icons">
            <i class='bx bx-filter bx-tada' id="filter-icon"></i>
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

        <div class="filter">
            <div class="filter-box">
              
                <p>  <i class='bx bx-category' style="color: #F7CD00;"></i> Choose the category you want</p>
                <ul>
                    <li class="list active" name="all" data-filter="all"><a href='index.php?c=all' >All</a></li>
                    <li class="list"  data-filter="Social"><a href='index.php?c=Social' >Social</a></li>
                    <li class="list" data-filter="Action"><a href='index.php?c=Action' >Action</a></li>
             
                    <li class="list" data-filter="Word"><a href='index.php?c=Word' >Word</a></li>
                    <li class="list" data-filter="Adventure"><a href='index.php?c=Adventure' >Adventure</a></li>
                    <li class="list" data-filter="Arcade"><a href='index.php?c=Arcade' >Arcade</a></li>
                    <li class="list" data-filter="Tools"><a href='index.php?c=Tools' >Tools</a></li>
                    <li class="list" data-filter="Health & Fitness"><a href='index.php?c=Health & Fitness' >Health & Fitness</a></li>
                    <li class="list" data-filter="Education"><a href='index.php?c=Education' >Education</a></li>
                    <li class="list" data-filter="Business"><a href='index.php?c=Business' >Business</a></li>
                    <li class="list" data-filter="Lifestyle"><a href='index.php?c=Lifestyle' >Lifestyle</a></li>
                    <li class="list" data-filter="Shopping"><a href='index.php?c=Shopping' >Shopping</a></li>
                    <li class="list" data-filter="Entertainment"><a href='index.php?c=Entertainment' >Entertainment</a></li>
                    <li class="list" data-filter="Sports"><a href='index.php?c=Sports' >Sports</a></li>




                </ul>
            
            </div>
           
        </div>
        </div>

    </div>
</header>


<section class="recomanded container">
<div class="heading">
    <i class='bx bxs-hand-right'></i>
    <h2>Recommended For You </h2>
</div>

<div class="recommand-content swiper">

  <div class="swiper-wrapper">

<!---Slide1-->
        <div class="swiper-slide">
            <div class="box">
<img src="img/facebook.png" alt="facebook">
<div class="box-text">
  <h2>FaceBook</h2>
  <h3>Social</h3>

   <div class="rate-down-price">
       <div class="rating">
        <i class='bx bxs-star'></i>
        <span>1.3</span>

       </div>

       <div class="price">
        <i class='bx bx-dollar'></i>
        <span>free</span>

       </div>
       <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
   </div>
</div>

            </div>
        </div>
       

        <!---Slide2-->
        <div class="swiper-slide">
            <div class="box" >
<img src="img/instagram.png" alt="instagram">
<div class="box-text">
  <h2>instagram</h2>
  <h3>Social</h3>

   <div class="rate-down-price">
       <div class="rating">
        <i class='bx bxs-star'></i>
        <span>2.5</span>

       </div>

       <div class="price">
        <i class='bx bx-dollar'></i>
        <span>free</span>

       </div>
       <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
   </div>

</div>
            </div>
        </div>
      
             <!---Slide3-->
             <div class="swiper-slide">
                <div class="box">
    <img src="img/twitter.png" alt="twitter">
    <div class="box-text">
      <h2>twitter</h2>
      <h3>Social</h3>
    
       <div class="rate-down-price">
           <div class="rating">
            <i class='bx bxs-star'></i>
            <span>4.4</span>
    
           </div>
    
           <div class="price">
            <i class='bx bx-dollar'></i>
            <span>free</span>
    
           </div>
           <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
      
        </div>
    </div>
                </div>
            </div>
     
            
                  <!---Slide4-->
        <div class="swiper-slide">
            <div class="box">
<img src="img/tik-tok.png" alt="tictok">
<div class="box-text">
  <h2>Tictok</h2>
  <h3>Social</h3>

   <div class="rate-down-price">
       <div class="rating">
        <i class='bx bxs-star'></i>
        <span>4.0</span>

       </div>

       <div class="price">
        <i class='bx bx-dollar'></i>
        <span>free</span>

       </div>
       <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
   </div>

</div>
            </div>
        </div>
     

               <!---Slide5-->
               <div class="swiper-slide">
                <div class="box">
    <img src="img/trending3.jpg" alt="pubge">
  <div class="box-text">
      <h2>Pubge</h2>
      <h3>Action Game</h3>
    
       <div class="rate-down-price">
           <div class="rating">
            <i class='bx bxs-star'></i>
            <span>4.7</span>
    
           </div>
    
           <div class="price">
            <i class='bx bx-dollar'></i>
            <span>5</span>
    
           </div>
           <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
       </div>
    </div>
   
                </div>
            </div>
         
    
           <!---Slide6-->
         
                
           <div class="swiper-slide">
            <div class="box">
<img src="img/trending2.jpg" alt="pubge">
<div class="box-text">
  <h2>Pubge</h2>
  <h3>Action Game</h3>

   <div class="rate-down-price">
       <div class="rating">
        <i class='bx bxs-star'></i>
        <span>4.7</span>

       </div>

       <div class="price">
        <i class='bx bx-dollar'></i>
        <span>5</span>

       </div>
       <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
   </div>
</div>

            </div>
        </div>
     
                

   <!---Slide6-->
         
                
   <div class="swiper-slide">
    <div class="box">
<img src="img/trending1.webp" alt="pubge">
<div class="box-text">
<h2>Pubge</h2>
<h3>Action Game</h3>

<div class="rate-down-price">
<div class="rating">
<i class='bx bxs-star'></i>
<span>4.7</span>

</div>

<div class="price">
<i class='bx bx-dollar'></i>
<span>5</span>

</div>
<a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
</div>
</div>

    </div>
</div>




      </div>
</div>


</section>

<section class="trendy container" id="apps">

    
<?php
                               $host = "localhost";
                               $dbUsername = "root";
                               $dbPassword = "";
                               $dbName = "app_store";
                               $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
                               
                                   if(isset($_GET['page']))
                                   {
                                       $page = $_GET['page'];
                                   }
                                   else
                                   {
                                       $page = 1;
                                   }
                                   
                                   
                               
                                   $num_per_page = 020;
                                   $start_from = ($page-1)*020;
                                   if(isset($_GET['c']))
                                   {
                                       $t = $_GET['c'];
                                       if($t=="all")
                                       {
                                        $t="All Apps";
                                        $query = "select * from google limit  $start_from,$num_per_page";
                                       }
                                       else{
                                       $query = "select * from google where Category= '$t' limit  $start_from,$num_per_page";
                                       }
                                   }
                                   else
                                   {
                                    $_GET['c']="all"; 
                                    $query = "select * from google limit  $start_from,$num_per_page";
                                    $t="All Apps";
                                   
                                   }
                                  
                                   $result = mysqli_query($con,$query);?>
                                   <div class="heading">
                             <i class='bx bxs-flame'></i>
    
                          <?php echo "<h2>$t</h2> "?>
                              </div>
                             <div class="trendy-content">
                                 <?php  
								while($r = mysqli_fetch_array($result))
								{	
								?>
                <div class="itemBox">
        <img src="img/pic1.png" alt="pubge">
        <div class="box-text">
        <h2><?php echo $r['AppName']; ?></h2>
        <h3><?php echo $r['Category']; ?></h3>
        
        <div class="rate-down-price">
        <div class="rating">
        <i class='bx bxs-star'></i>
        <span><?php echo $r['Rating']; ?></span>
        
        </div>
        
        <div class="price">
        <i class='bx bx-dollar'></i>
        <span><?php echo $r['Price']; ?></span>
        
        </div>
        <a href='index.php?id1=<?php echo $_SESSION['uid']; ?>&n1=<?php echo $r['AppName']; ?>&p1=<?php echo $r['Price']; ?>&c1=<?php echo $r['Category']; ?>&r1=<?php echo $r['Rating']; ?>'  class="box-btn"><i class='bx bx-heart'></i></a>
        </div>
        </div>


        </div>
								
                                    <?php } ?>
   </section>                                 

                <?php                   
        

        echo "<center><a href='index.php?page=".($page+1)."&c=".($_GET['c'])."' class='btn btn-danger'>Next</a></center>";
       
        echo "<center><a href='index.php?page=".($page-1)."&c=".($_GET['c'])."' class='btn btn-danger'>Previous</a></center>";
   

?>
<?php

if(isset($_GET['id1'])&&isset($_GET['n1'])&&isset($_GET['p1'])&&isset($_GET['c1'])&&isset($_GET['r1']))
{

    
    $uid = $_GET['id1'];
    $name = $_GET['n1'];
    $price = $_GET['p1'];
    $cat = $_GET['c1'];
    $rate  = $_GET['r1'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "app_store";
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    mysqli_query($con,"insert into fav(idu,name,price,rate,category ) values('$uid','$name','$price','$rate','$cat')") or die(mysqli_error($con));
    echo "<script type='text/javascript'>alert('Your data Is Add Inside Your Fav List');window.history.back(1);</script>";

   // echo "<script type='text/javascript'>alert('Your data Is Add Inside Your Fav List')</script>";

}?>


<!--<right><input type="submit" name="s" value="Next" class="btn" " ></right>-->

<h1 class="credit"> created by <strong> Advanced Group </strong> | all rights reserved! </h1>












<script src="js/swiper-bundle.min.js"></script>
    <script src="js/java.js"></script>
</body>
</html>