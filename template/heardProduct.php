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
    header{
        position: fixed;
        background: #053C60;
        padding: 20px;
        width: 100%;
        height: 30px;
        display: block;
        top: 0;
        left: 0;
        z-index: 100000;
        /* display: inline-flex; */
    }
.left_area h3{
    color: #fff;
    margin: 0;
    font-size: 22px;
    font-weight: 900;
    margin-left: 50px;
}

.left_area span{
    color: #33A6F1;

}
.center_area h3{
    float: center;
    color: #fff;
    margin-top: -2%;
    font-size: 22px;
    font-weight: 900;
    margin-left: 480px;
}

.logout_btn{
    padding: 5px;
    background: #479FD8;
    text-decoration:  none;
    float: right;
    margin-left: 430px;
    margin-top: 0.px;
    margin-right: 40px;
    border-radius: 8px;
    font-size:  16px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background-color;
}

.logout_btn:hover{
    background: #0571B8;
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
            <h3>ATN <span> STORE </span></h3>
        </div>
        <div class="center_area">
          <h3> Product Table</h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- header area end -->


    
