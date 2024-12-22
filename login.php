<?php
include 'components/connect.php';
if (isset($_COOKIE['user_id'])){
    $user_id =$_COOKIE['user_id'];
}else{
    $user_id='';
}
if (isset($_POST['submit'])){
   
    $email=$_POST['email'];
    $email=filter_var($email, FILTER_SANITIZE_STRING);

    $pass= sha1($_POST['pass']);
    $pass=filter_var($pass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT *FROM `users` Where email=? AND password=?");
    $select_user->execute([$email, $pass]);
    $row =$select_user->fetch(PDO::FETCH_ASSOC);
if($select_user->rowCount()>0){
setcookie('user_id',$row['id'], time() +60*60*25+30, '/');
header('location:home.php');
}else{
    $warning_msg[]='incorrect email or password';
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer -user login page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time();?>">
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include'components/user_header.php'?>
<div class="banner">
    <div class="detail">
    <h1>login</h1>
    <p>Welcome to Blue sky summer, 
        where every scoop is crafted with love and a sprinkle of happiness! 
        We specialize in serving premium, hand-made ice creams with unique flavors that bring smiles to all ages.
        we're here to make your moments sweeter, one cone at a time! </p>
        <span><a href="home.php"></a><i class="bx bx-right-arrow-alt"></i>login</span>
</div></div>
<div class="form-container">
<form action="" method="post" enctype="multipart/form-data" class="login">
            <h3>login now</h3>
            <div class="input-field">
 <p>email<span>*</span></p>
 <input type="email" name="email" placeholder="enter your email" maxlength="50" required class ="box">
</div>
<div class="input-field">
  <p>your password<span>*</span></p>
  <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class ="box">
</div>
<p class ="link">do not  have an account? <a href="register.php">register now</a></p>
<input type="submit" name="submit" value="login now"class="btn">

</form>
</div>


<!--sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'components/alert.php';?>
<?php include 'components/footer.php';?>
<script src="js/user_script.js"></script>

    
</body>
</html>