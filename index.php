<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>ANT STORE</title>
    <style>
    .list_product{
        width: 990px;
        height: 200vh;
        background: red;
        position: absolute;
        margin-left: 24%;
        margin-top: 5%;
    }
    </style>
</head>
<body>

    <input type="checkbox" id="check">
    <!-- header area start -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
          <h3> ATN <span> STORE </span>  </h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- header area end -->

    <!-- Sidebar  start -->
    <div class="sidebar">
        <center> 
            <img src="image/avatarAmin.jpg" alt="" class="profile_image">
            <h4>ZuKa</h4>
        </center>
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="homeToy.php" target="_blank"><i class="fas fa-table"></i><span>List Toys</span></a>
        <a href="employee.php"><i class="fas fa-users"></i><span>Employees</span></a>
        <a href="product.php"><i class="fas fa-store-alt"></i><span>Products</span></a>
        <a href="index.php"><i class="fas fa-chevron-circle-left"></i><span>Home</span></a>
    </div>
    <!-- SideBarEnd -->

    <div class="content">

    </div>

    <!-- <div class="list_product">

    </div> -->
</body>
</html>