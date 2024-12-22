<?php
include 'components/connect.php';
if (isset($_COOKIE['user_id'])){
    $user_id =$_COOKIE['user_id'];
}else{
    $user_id='';
}
if (isset($_GET['get_id'])){
    $get_id =$_GET['get_id'];
}else{
    $get_id='';
    header('location:order.php');
}
if(isset($_POST['cancle'])){
    $update_order=$conn->prepare("UPDATE `orders` SET status=? WHERE id=?");
    $update_order->execute(['cancled', $get_id]);
    
    header('location:order.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer -order details page</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time();?>">
    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<?php include'components/user_header.php'?>
<div class="banner">
    <div class="detail">
    <h1>order details</h1>
    <p>Welcome to Blue sky summer, 
        where every scoop is crafted with love and a sprinkle of happiness! 
        We specialize in serving premium, hand-made ice creams with unique flavors that bring smiles to all ages.
        we're here to make your moments sweeter, one cone at a time! </p>
        <span><a href="home.php"></a><i class="bx bx-right-arrow-alt"></i>order details</span>
</div></div>
<div class="order-detail">
    <div class="heading">
        <h1>my order detail</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi quasi, nemo quas, ducimus soluta accusamus officia ipsam delectus voluptate necessitatibus quia ab voluptas reprehenderit consequatur quae similique commodi tempore obcaecati!</p>
        <img src="image/separator-img.png">
    </div>
    <div class="box-container">
        <?php
        $grand_total=0;
        $select_order=$conn->prepare("SELECT * FROM `orders` WHERE id=? LIMIT 1");
        $select_order->execute([$get_id]);

        if($select_order->rowCount()>0){
            while($fetch_order=$select_order->fetch(PDO::FETCH_ASSOC)){
                $select_product=$conn->prepare("SELECT * FROM `products` WHERE id=? LIMIT 1");
                $select_product->execute([$fetch_order['product_id']]);
                if($select_product->rowCount()>0){
                    while($fetch_product=$select_product->fetch(PDO::FETCH_ASSOC)){
                        $sub_total=($fetch_order['price']*$fetch_order['qty']);
                        $grand_total+=$sub_total;?>

                        <div class="box">
                            <div class="col">
                                <p class="title"><i class="bx bxs-calender-alt"></i><?=$fetch_order['date'];?></p>
                                <img src="uploaded_files/<?=$fetch_product['image']?>" class="image">
                                <p class="price">$<?=$fetch_product['price'];?>/-</p>
                                <p class="name"><?=$fetch_product['name'];?></p>
                                <p class="grand-total">total amount payable:<span>$<?=$grand_total;?></span></p>
                            </div>
                            <div class="col">
                                <p class="title">billing address</p>
                                <p class="user"><i class="bi bi-person-bounding-box"></i><?=$fetch_order['name'];?></p>
                                <p class="user"><i class="bi bi-phone"></i><?=$fetch_order['number'];?></p>
                                <p class="user"><i class="bi bi-envelope"></i><?=$fetch_order['email'];?></p>
                                <p class="user"><i class="bi bi-pin-map-fill"></i><?=$fetch_order['address'];?></p>
                                <p class="status" style="color:<?php if($fetch_order['status']=='delivered'){
                                    echo "green";}elseif($fetch_order['status']=='cancled'){echo "red";}else{echo "orange";}?>"><?=$fetch_order['status'];?></p>
                                    <?php
                                    if($fetch_order['status']=='cancled'){
                                        ?><a href="checkout.php?get_id=<?=$fetch_product['id'];?>" class="btn" style="line-height: 3">order again</a>
                                  <?php  } else{?>
                                <form action="" method="post">
                                    <button type="submit" name="cancle" class="btn" onclick="return confirm('do you want to cancle this product');">cancle</button>
                                </form>
                                  <?php }
                                    ?>
                            </div>
                        </div>
                        <?php
                    }
                }
            }}else{
                echo '<p class="empty">no order take palced yet</p>';
            }
        ?>
    </div>
</div>


<!--sweetalert cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'components/alert.php';?>
<?php include 'components/footer.php';?>
<script src="js/user_script.js"></script>

    
</body>
</html>