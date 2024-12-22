
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add Boxicons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Your other CSS files -->
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
<header>
<header>
    <div class="logo">
        <img src="../image/logo.png" width="200">
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    <div class="profile-detail">
        <?php
        // Check if connection is established
        if ($conn) {
            $select_profile = $conn->prepare("SELECT *FROM `seller` WHERE id =?");
            $select_profile->execute([$seller_id]);
            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
            <div class="profile">
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
                <p><?= $fetch_profile['name']; ?></p>
                <div class="flex-btn">
                    <a href="profile.php" class="btn">profile</a>
                    <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="btn">logout</a>
                </div>
            </div>
        <?php
            }
        } else {
            echo 'Database connection failed';
        }
        ?>
    </div> 
</header>

<!-- Rest of your code -->

<div class="sidebar-container">
    <div class="sidebar">
    <?php
    $select_profile=$conn->prepare("SELECT *FROM `seller` WHERE id =?");
    $select_profile->execute([$seller_id]);
    if($select_profile->rowCount()>0){
        $fetch_profile =$select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="profile">
            <img src="../uploaded_files/<?= $fetch_profile['image'];?>"class="logo-img" width="100">
            <p><?=$fetch_profile['name']; ?></p>
    </div>
<?php } ?>
    <h5>menu</h5>
    <div class="navbar">
        <ul>
 <li><a href="dashboard.php"><i class="bx bxs-home-smile"></i>dashboard</a></li>
 <li><a href="add_product.php"><i class="bx bxs-shopping-bags"></i>add products</a></li>
 <li><a href="view_product.php"><i class="bx bxs-food-menu"></i>view product</a></li>
 <li><a href="user_accounts.php"><i class="bx bxs-user-detail"></i>accounts</a></li>
 <li><a href="../components/admin_logout.php" onclick="return confirm('logout from this website');"><i class="bx bx-log-out"></i>logout</a></li>
    </ul>   
    </div>
    <h5> find us</h5>
    <div class="social-links">
    <i class="bx bxl-facebook"></i>
    <i class="bx bxl-instagram"></i>
    <i class="bx bxl-linkedin"></i>
    <i class="bx bxl-twitter"></i>
    <i class="bx bxl-pinterest"></i>
</div>
    </div>
    </div> 
     
    </body>
    </html>
