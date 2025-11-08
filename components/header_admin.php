
<header>  
    <div class="logo">
        <img src="../image/council_logo.png" width="100">
    </div>
    <div class="title">
        <h1>Laguna Council Merchandise</h1>
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    <div class="profile-detail">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `seller` WHERE id=?");
            $select_profile->execute([$seller_id]);

            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="profile">
            <img src="../files/<?= $fetch_profile['image']; ?>" class="logo-img">
            <p><?= $fetch_profile['fullname']; ?></p>
        </div>
        <div class="flex-btn">
            <a href="profile.php" class="btn">Profile</a>
            <a href="../components/admin_logout.php" onclick="return confirm('Are you sure you want to logout?');" class="btn">Logout</a>
        </div>
        <?php } ?>
    </div>
</header>

<div class="sidebar">
        <?php
            $select_profile = $conn->prepare("SELECT * FROM `seller` WHERE id=?");
            $select_profile->execute([$seller_id]);

            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="profile">
            <img src="../files/<?= $fetch_profile['image']; ?>" class="logo-img">
            <p><?= $fetch_profile['fullname']; ?></p>
        </div>
        <?php } ?>
    <h3>Menu</h3>
    <div class="nav-bar">
        <ul>
            <li><a href="dashboard.php"><i class="bx bxs-home-smile"></i>Dashboard</a></li>
            <li><a href="addproduct.php"><i class="bx bxs-shopping-bags"></i>Add Products</a></li>
            <li><a href="viewproducts.php"><i class="bx bxs-food-menu"></i>View Products</a></li>
            <li><a href="user_acc.php"><i class="bx bxs-user-detail"></i>Accounts</a></li>
            <li><a href="../components/admin_logout.php" onclick="return confirm('Are you sure you want to logout?');">
            <i class="bx bxs-log-out"></i>Logout</a></li>
        </ul>
    </div>
    <h3 class = "fu">Find us</h3>
    <div class="social-links">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram"></i>
            <i class="bx bxl-twitter"></i>
    </div>
</div>
