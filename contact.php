<?php
include 'components/connect.php';
if (isset($_COOKIE['user_id'])){
    $user_id =$_COOKIE['user_id'];
}else{
    $user_id='';
}
//sending message
if(isset($_POST['send_message'])){
    if($user_id!=''){
        $id=unique_id();
        $name=$_POST['name'];
        $name=filter_var($name, FILTER_SANITIZE_STRING);

        $email=$_POST['email'];
        $email=filter_var($email, FILTER_SANITIZE_STRING);

        $subject=$_POST['subject'];
        $subject=filter_var($subject, FILTER_SANITIZE_STRING);

        $message=$_POST['message'];
        $message=filter_var($message, FILTER_SANITIZE_STRING);

        $verify_message=$conn->prepare("SELECT * FROM `message` WHERE user_id=? AND name=? AND email=? AND subject=? AND message=?");
        $verify_message->execute([$user_id, $name, $email, $subject,$message]);

        if($verify_message->rowCount()>0){
        $warning_msg[]='message already exist';
        }else{
            $insert_message=$conn->prepare("INSERT INTO `message`(id,user_id, name, email, subject, message) VALUES(?,?,?,?,?,?)");
            $insert_message->execute([$id, $user_id, $name, $email,$subject,$message]);

            $success_msg[]='comment inserted successfully';
        }
    }else{
        $warning_msg[]='please login first';
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer -contact page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time();?>">
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include'components/user_header.php'?>
<div class="banner">
    <div class="detail">
    <h1>contact us</h1>
    <p>Welcome to Blue sky summer, 
        where every scoop is crafted with love and a sprinkle of happiness! 
        We specialize in serving premium, hand-made ice creams with unique flavors that bring smiles to all ages.
        we're here to make your moments sweeter, one cone at a time! </p>
        <span><a href="home.php"></a><i class="bx bx-right-arrow-alt"></i>contact us</span>
</div></div>
<div class="services">
    <div class="heading">
        <h1>our services</h1>
        <p>Just A Few Click To Make Reservation Online For Saving Your Time And Money</p>
        <img src="image/separator-img" >
    </div>
<div class="box-container">
    <div class="box">
        <img src="image/0.png">
        <div>
            <h1>free shipping fast</h1>
            <p> orders quickly without any additional shipping cost</p>
        </div>
    </div>
    <div class="box">
        <img src="image/1.png">
        <div>
            <h1>money back & guarantee</h1>
            <p>promises a full refund if customers are unsatisfied </p>
        </div>
    </div>
    <div class="box">
        <img src="image/2.png">
        <div>
            <h1>online support 24/7</h1>
            <p>real-time assistance through nedia like chat, email</p>
        </div>
    </div>
</div>
</div>
<div class="form-container">
    <div class="heading">
        <h1>drop us a line</h1>
        <p>Just A Few Click To Make Reservation Online For Saving Your Time And Money</p>
        <img src="image/separator-img" >
    </div>
    <form action=""method="post" class="register">
        <div class="input-field">
            <label>Name <sup>*</sup></label>
            <input type="text" name="name" required placeholder="enter your name" class="box">
        </div>
        <div class="input-field">
            <label>Email <sup>*</sup></label>
            <input type="email" name="email" required placeholder="enter your email" class="box">
        </div>
        <div class="input-field">
            <label>subject <sup>*</sup></label>
            <input type="text" name="subject" required placeholder="reason.." class="box">
        </div>
        <div class="input-field">
            <label>comment <sup>*</sup></label>
           <textarea name="message" cols="30" rows="10" required placeholder="" class="box"></textarea>
        </div>
        <button type="submit" name="send_message" class="btn">send message</button>
    </form>
</div>
<div class="address">
    <div class="heading">
        <h1>our contact details</h1>
        <p>Just A Few Click To Make Reservation Online For Saving Your Time And Money</p>
        <img src="image/separator-img" >
    </div>
    <div class="box-container">
        <div class="box">
            <i class="bx bxs-map-alt"></i>
            <div>
                <h4>address</h4>
                <p>kathmandu , putali sadak</p>
            </div>
        </div>
        <div class="box">
            <i class="bx bxs-phone-incoming"></i>
            <div>
                <h4>phone</h4>
                <p>331690022</p>
                <p>331690022</p>
            </div>
        </div>
        <div class="box">
            <i class="bx bxs-envelope"></i>
            <div>
                <h4>email</h4>
                <p>suchitra@gmail.com</p>
                <p>suchitra@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<!--sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'components/alert.php';?>
<?php include 'components/footer.php';?>
<script src="js/user_script.js"></script>

    
</body>
</html>