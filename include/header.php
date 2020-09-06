<?php
    session_start();
    require_once 'core/init.php'
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="JLG Fashion Blog">
    <meta name="keywords" content="fashion, blog, creative, style, shoe, sneakers, cap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>

<body>
    <!-- SQL query  -->
    <?php
    $sql = "SELECT * FROM categories WHERE parent = 0 ";
    $pquery = $db->query($sql);
    ?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
       
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>

            <li><a href="#"><span class="fas fa-shopping-cart"></span>
                <div class="tip">0</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="<?php if($page=="index"){echo "active";}?>"><a href="./index.php">Home</a></li>
                            <li class="<?php if($page=="women"){echo "active";}?>"><a href="#">Women’s</a></li>
                            <li class="<?php if($page=="men"){echo "active";}?>"><a href="#">Men’s</a></li>
                            <li class="<?php if($page=="shop"){echo "active";}?>"><a href="./shop.php">Shop</a></li>
                            <li class="<?php if($page=="pages"){echo "active";}?>"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./product-details.php">Product Details</a></li>
                                    <li><a href="./checkout.php">Checkout</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>

                            <?php
                                while($parent = mysqli_fetch_assoc($pquery)){
                             ?>
                             <?php
                                $parent_id = $parent['id'];
                                $sql2 =  "SELECT * FROM categories WHERE parent = $parent_id ";
                                $cquery = $db->query($sql2);
                             ?>
                            <li class="<?php if($page=="blog"){echo "active";}?>"><a href="./blog.php"><?php echo $parent['category'];?></a>
                                <ul class="dropdown">
                                    <?php while($child = mysqli_fetch_assoc($cquery)) {?>
                                    <li><a href="#"><?php echo $child['category'] ?></a></li>
                                    <?php }; ?>
                                </ul>
                            </li>
                            <li class="<?php if($page=="contact"){echo "active";}?>"><a href="./contact.php">Contact</a></li>
                        </ul>
                        <?php }; ?>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                        <?php
                        if(isset($_SESSION['UserID'])){
                            $name = $_SESSION['Name'];
                            
                            echo '<a href="profile.php"><span class="fas fa-user-circle"></span>'.$name.' </a>
                            <a href="include/logout.inc.php">Logout</a>';
                        }
                        else{
                            echo '<a href="./login.php">Login</a>
                            <a href="./register.php">Register</a>';
                           
                        }
                        ?>
                            
                        </div>
                        
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>                       
                            <li><a href="./shop-cart.php"><span class="fas fa-shopping-cart"></span>
                                <div class="tip">0</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->