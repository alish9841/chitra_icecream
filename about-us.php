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
    <title>Blue Sky Summer - about-us page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include'components/user_header.php'?>
<div class="banner">
    <div class="detail">
    <h1>about us</h1>
    <p>Welcome to Blue sky summer, 
        where every scoop is crafted with love and a sprinkle of happiness! 
        We specialize in serving premium, hand-made ice creams with unique flavors that bring smiles to all ages.
        we're here to make your moments sweeter, one cone at a time! </p>
        <span><a href="home.php"></a><i class="bx bx-right-arrow-alt"></i>about us</span>
</div></div>
<div class="chef">
    <div class="box-container">
        <div class="box">
            <div class="heading">
                <span>alish</span>
                <h1>Masterchef</h1>
                <img src="image/separator-img.png" >
            </div>
            <p>Meet Chef Alish, the magician behind every creamy, dreamy scoop of ice cream at our shop!
             With a passion for blending fresh ingredients and innovative flavors, 
             Chef Alish transforms simple desserts into unforgettable experiences.</p>
             <div class="flex-btn">
                <a href="" class="btn">explore our menu</a>
                <a href="menu.php" class="btn">visit our shop</a>
             </div>
        </div>
        <div class="box">
            <img src="image/ceaf.png"class="img">
        </div>
    </div>
</div>
<!--story section start-->
<div class="story">
    <div class="heading">
        <h1>our story</h1>
        <img src="image/separator-img.png">
    </div>
    <p>This isn't just an ice cream shop—it's a place where sweet memories are made, one scoop at a time. 
        Thank you for being part of our story!</p>
        <a href="menu.php" class="btn">our services</a>
</div>
<div class="container">
    <div class="box-container">
        <div class="img-box">
            <img src="image/about.png">
        </div>
        <div class="box">
            <div class="heading">
            <h1>Taking Ice Cream to New Heights</h1>
        </div>
        <p> From classic favorites to adventurous blends, every cone, cup, and 
            sundae is a testament to our commitment to delight every palate.</p>
            <a href="" class="btn">learn more</a>
    </div>
</div>
</div>
<!--story section end-->
<div class="team">
    <div class="heading">
        <span>our team</span>
        <h1>Quality & passion with our services</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="box-container">
        <div class="box">
            <img src="image/team-1.jpg" class="img">
    <div class="content">
        <img src="image/shape-19.png" class="shap">
        <h2>Rujen</h2>
        <p>Coffee Chef</p>
    </div>
        </div>
        <div class="box">
            <img src="image/team-2.jpg" class="img">
    <div class="content">
        <img src="image/shape-19.png" class="shap">
        <h2>Nayan</h2>
        <p>Pastry Chef</p>
    </div>
        </div>
        <div class="box">
            <img src="image/team-3.jpg" class="img">
    <div class="content">
        <img src="image/shape-19.png" class="shap">
        <h2>tom</h2>
        <p>Coffee Chef</p>
    </div>
        </div>
    </div>
</div>

<!--team section end-->
<div class="standers">
    <div class="detail">
        <div class="heading">
            <h1>our standers</h1>
            <img src="image/separator-img.png">
        </div>
        <p>Our ice creams are made with the finest ingredients</p>
        <i class="bx bxs-heart"></i>
        <p>We prioritize quality, freshness, and creativity</p>
        <i class="bx bxs-heart"></i>
        <p>Cleanliness, customer satisfaction, and a warm</p>
        <i class="bx bxs-heart"></i>
        <p>Come for the ice cream, stay for the memories</p>
        <i class="bx bxs-heart"></i>
        <p>crafted to perfection for every taste bud.</p>
        <i class="bx bxs-heart"></i>
    </div>
</div>
<!--standers section end-->
<div class="testimonia">
    <div class="heading">
        <h1>testimonial</h1>
        <img src="image/separator-img.png">
    </div>
    <div class="testimonial-container">
        <div class="slide-row" id="slide">
            <div class="slide-col">
                <div class="user-text">
                    <p></p>
                    <h2>zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (1).jpg">
                </div>
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p></p>
                    <h2>zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (2).jpg">
                </div>
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p></p>
                    <h2>zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (3).jpg">
                </div>
            </div>
            <div class="slide-col">
                <div class="user-text">
                    <p></p>
                    <h2>zen</h2>
                    <p>Author</p>
                </div>
                <div class="user-img">
                    <img src="image/testimonial (4).jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="indicator">
        <span class="btn1 active"></span>
    </div>
</div>
<!--testimonial section end-->
<div class="mission">
    <div class="box-container">
        <div class="box">
        <div class="heading">
            <h1>our mission</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="detail">
            <div class="img-box">
                <img src="image/mission.webp">
            </div>
            <div>
        <h2>mexicon chocolate</h2>
        <p> layers of shaped marshmallow candies - bunnies, chicks, and simple flowers
            -make a memorable gift in a beribboned box</p>
    </div>
    </div>
    <div class="detail">
            <div class="img-box">
                <img src="image/mission1.webp">
            </div>
            <div>
        <h2>vanilla with honey</h2>
        <p> layers of shaped marshmallow candies - bunnies, chicks, and simple flowers
            -make a memorable gift in a beribboned box</p>
    </div>
    </div>
    <div class="detail">
            <div class="img-box">
                <img src="image/mission0.jpg">
            </div>
            <div>
        <h2>pappermint chip</h2>
        <p> layers of shaped marshmallow candies - bunnies, chicks, and simple flowers
            -make a memorable gift in a beribboned box</p>
    </div>
    </div>
    <div class="detail">
            <div class="img-box">
                <img src="image/mission2.webp">
            </div>
            <div>
        <h2>raspberry sorbat</h2>
        <p> layers of shaped marshmallow candies - bunnies, chicks, and simple flowers
            -make a memorable gift in a beribboned box</p>
    </div>
    </div>
    </div>
        <div class="box">
            <img src="image/form.png" class="img">

        </div>
</div>
</div>
<!--mission section end-->
<?php include 'components/footer.php';?>
<script src="js/user_script.js"></script>

    
</body>
</html>