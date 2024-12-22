<?php
include 'components/connect.php';
if (isset($_COOKIE['user_id'])){
    $user_id =$_COOKIE['user_id'];
}else{
    $user_id='';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - home page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include'components/user_header.php'?>
<!--slider section start -->
<div class="slider-container">
    <div class="slider">
        <div class="slideBox active">
            <div class="textBox">
                <h1>we pride ourselfs on <br> exceptional flavors</h1>
                <a href="menu.php"class="btn">shop now</a>
            </div>
            <div class="imgBox">
                <img src="image/slider.jpg">
            </div>
        </div>
        <div class="slideBox">
            <div class="textBox">
                <h1>cold treats are my kind<br>of comfort food</h1>
                <a href="menu.php"class="btn">shop now</a>
            </div>
            <div class="imgBox">
                <img src="image/slider0.jpg">
            </div>
        </div>
    </div>
    <ul class="controls">
        <li onclick="nextslide();" class="next"> <i class="bx bx-right-arrow-alt"></i></li>
        <li onclick="prevslide();" class="prev"> <i class="bx bx-left-arrow-alt"></i></li>
    </ul>
</div>
<!----slider section end-->

<div class="service">
    <div class="box-container">
        <!--service item box-->
        <div class="box">
            <div class="icon>">
                <div class="icon-box">
                    <img src="image/services.png" class="img1">
                    <img src="image/services(1).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>delivery</h4>
                <span>100% secure</span>
            </div>
        </div>
        <!--service item box end-->
         <!--service item box-->
         <div class="box">
            <div class="icon>">
                <div class="icon-box">
                    <img src="image/services(2).png" class="img1">
                    <img src="image/services(3).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>payment</h4>
                <span>100% secure</span>
            </div>
        </div>
        <!--service item box end-->
         <!--service item box-->
         <div class="box">
            <div class="icon>">
                <div class="icon-box">
                    <img src="image/services(5).png" class="img1">
                    <img src="image/services(6).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>support</h4>
                <span>24*7 hours</span>
            </div>
        </div>
        <!--service item box end-->
         <!--service item box-->
         <div class="box">
            <div class="icon>">
                <div class="icon-box">
                    <img src="image/service.png" class="img1">
                    <img src="image/service(1).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>returns</h4>
                <span>24*7 free return</span>
            </div>
        </div>
        <!--service item box end-->
         <!--service item box-->
         <div class="box">
            <div class="icon>">
                <div class="icon-box">
                    <img src="image/services(7).png" class="img1">
                    <img src="image/services(8).png" class="img2">
                </div>
            </div>
            <div class="detail">
                <h4>gift service</h4>
                <span>support gift service</span>
            </div>
        </div>
        <!--service item box end-->
    </div>
</div>
<!----service section end-->
<div class="categories">
    <div class="heading">
        <h1>categories features</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/categories.jpg">
            <a href="menu.php" class="btn">coconuts</a>
        </div>
        <div class="box">
            <img src="image/categories0.jpg">
            <a href="menu.php" class="btn">chocolate</a>
        </div>
        <div class="box">
            <img src="image/categories2.jpg">
            <a href="menu.php" class="btn">strawberry</a>
        </div>
        <div class="box">
            <img src="image/categories1.jpg">
            <a href="menu.php" class="btn">corn</a>
        </div>
</div>
</div>
<!--categories section end--->
<img src="image/menu-banner.jpg" class="menu-banner">
<div class="taste">
       <div class="heading">
        <span>Taste</span>
        <h1>Buy any ice cream @ get one free</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="main-container">
    <div class="box">
        <img src="image/taste.webp">
        <div class="detail">
     <h2>natural sweetness</h2>
     <h1>vanilla</h1>
    </div>
    </div>
    <div class="main-container">
    <div class="box">
        <img src="image/taste.webp">
        <div class="detail">
     <h2>natural sweetness</h2>
     <h1>vanilla</h1>
    </div>
    </div>
    <div class="main-container">
    <div class="box">
        <img src="image/taste.webp">
        <div class="detail">
     <h2>natural sweetness</h2>
     <h1>matcha</h1>
    </div>
    </div>
    <div class="main-container">
    <div class="box">
        <img src="image/taste.webp">
        <div class="detail">
     <h2>natural sweetness</h2>
     <h1>blueberry</h1>
    </div>
    </div>
</div>

<!--taste section end--->
<div class="ice-container">
    <div class="overlay">
        <div class="detail">
            <h1>Ice cream is cheaper than <br> therapy for stress</h1>
            <p>
                  Ice cream, a joy in every bite,
                A swirl of flavors, pure delight.
                  On sunny days or starry nights,
                  It melts our worries, feels just right.
                   A timeless treat, both cool and bright!</p>
            <a href="menu.php" class="btn"></a>
        </div>
    </div>
</div>
<!--container section end--->
<div class="taste2">
    <div class="t-banner">
        <div class="detail">
        <div class="overlay">
            <h1>find your taste of deserts</h1>
            <p>Treat them to a delicious treat and send them luck too !</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="box-overlay">
                    <img src="image/type4.jpg" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="box-overlay">
                    <img src="image/type.avif" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="box-overlay">
                    <img src="image/type1.png" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="box-overlay">
                    <img src="image/type2.png" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="box-overlay">
                    <img src="image/type0.avif" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="box-overlay">
                    <img src="image/type4.jpg" alt="">
                    <div class="box-details fadeIn-bottom">
                        <h1>strawberry</h1>
                        <p>find your taste in deserts</p>
                        <a href="menu.php" class="btn">explore more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--taste2 section end--->
<div class="flavor">
    <div class="box-container">
        <img src="image/left-banner2.webp" >
        <div class="detail">
            <h1>Hot Deal ! Sale Up To <span>20% off</span></h1>
            <p>expired</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
</div>
<!--flavor section end--->

<div class="usage">
    <div class="heading">
        <h1>How it works</h1>
        <img src="image/separator-img.png" >  
    </div>
    <div class= "row">
        <div class="box-container">
            <div class="box">
                <img src="image/icon.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon0.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon1.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
        </div>
        <img src="image/sub-banner.png" class="divider">
        <div class="box-container">
            <div class="box">
                <img src="image/icon2.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon3.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
            <div class="box">
                <img src="image/icon4.avif">
                <div class="detail">
                 <h3>scoop ice-cream</h3>
                 <p>Ice cream, a creamy delight so sweet,
                 A frozen treat that feels like a feast!🍦</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--usage  section end--->
<div class="pride">
    <div class="detail">
        <h1>We Pride Ourselves On <br> Exceptional Flavors.
        </h1>
        <p>It is the sweet symphony of childhood dreams and grown-up cravings, 
            melting slowly into pure bliss. </p>
           <a href="menu.php" class="btn">Shop Now</a>
    </div>
</div>
<!--pride section end--->
<?php include 'components/footer.php';?>
<script src="js/user_script.js"></script>

    
</body>
</html>