<?php
include '../components/connect.php';

// Check if seller_id exists in cookies
if (isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
} else {
    $seller_id = '';
    header('location:login.php');
    exit;
}

// Get product ID from the GET request
$get_id = filter_input(INPUT_GET, 'post_id', FILTER_SANITIZE_STRING);

// DELETE PRODUCT
if (isset($_POST['delete'])) {
    $p_id = filter_input(INPUT_POST, 'product_id', FILTER_SANITIZE_STRING);

    if ($p_id) {
        try {
            // Fetch the product image
            $delete_image = $conn->prepare("SELECT image FROM `products` WHERE id = ? AND seller_id = ?");
            $delete_image->execute([$p_id, $seller_id]);
            $fetch_delete_image = $delete_image->fetch(PDO::FETCH_ASSOC);

            // Delete the image file if it exists
            if (!empty($fetch_delete_image['image']) && file_exists('../uploaded_files/' . $fetch_delete_image['image'])) {
                unlink('../uploaded_files/' . $fetch_delete_image['image']);
            }

            // Delete the product record
            $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ? AND seller_id = ?");
            $delete_product->execute([$p_id, $seller_id]);

            header("location:view_product.php");
            exit;
        } catch (PDOException $e) {
            echo "Error deleting product: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - Show Product Page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Boxicons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<div class="main-container">
    <?php include '../components/admin_header.php'; ?>

    <section class="read-post">
        <div class="heading">
            <h1>Product Details</h1>
            <img src="../image/separator-img.png" alt="Separator">
        </div>
        <div class="box-container">
            <?php
            try {
                // Fetch product details
                $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ? AND seller_id = ?");
                $select_product->execute([$get_id, $seller_id]);

                if ($select_product->rowCount() > 0) {
                    while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <form action="" method="post" class="box">
                            <input type="hidden" name="product_id" value="<?= htmlspecialchars($fetch_product['id']); ?>">

                            <!-- Display product status -->
                            <div class="status" style="color: <?= $fetch_product['status'] === 'active' ? 'limegreen' : 'coral'; ?>">
                                <?= htmlspecialchars($fetch_product['status']); ?>
                            </div>

                            <!-- Display product image -->
                            <?php if (!empty($fetch_product['image'])) { ?>
                                <img src="../uploaded_files/<?= htmlspecialchars($fetch_product['image']); ?>" class="image">
                            <?php } ?>

                            <!-- Display product details -->
                            <div class="price"><?= htmlspecialchars($fetch_product['price']); ?></div>
                            <div class="title"><?= htmlspecialchars($fetch_product['name']); ?></div>
                            <div class="content"><?= htmlspecialchars($fetch_product['product_detail']); ?></div>

                            <!-- Buttons -->
                            <div class="flex-btn">
                                <a href="edit_product.php?id=<?= htmlspecialchars($fetch_product['id']); ?>" class="btn">Edit</a>
                                <button type="submit" name="delete" class="btn" onclick="return confirm('Delete this product?');">Delete</button>
                                <a href="view_product.php" class="btn">Go Back</a>
                            </div>
                        </form>
                        <?php
                    }
                } else {
                    echo '
                    <div class="empty">
                        <p>No product found!<br>
                        <a href="add_product.php" class="btn" style="margin-top:1.5rem;">Add Product</a></p>
                    </div>';
                }
            } catch (PDOException $e) {
                echo "<div class='error'>Error fetching product: " . $e->getMessage() . "</div>";
            }
            ?>
        </div>
    </section>
</div>

<!-- SweetAlert CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Custom JS -->
<script src="../js/admin_script.js"></script>
<?php include '../components/alert.php'; ?>
</body>
</html>
