<?php
$page = "index";
define("TITLE","Home | Just Ladies & Gentlemen");
include("include/header.php");

?>

    <!-- Categories Section Begin -->
    <section class="categories">
    <?php
if (isset($_GET['login'])) {
        if($_GET['login'] == "success"){
          echo "<div class='alert alert-success alert-dismissible fade show home-alert-box' role='alert'>
                 <p> Login Successful!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
    }
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg" data-setbg="img/categories/category-6.jpg">
                        <div class="categories__text">
                            <h1>Men’s fashion</h1>
                            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore edolore magna aliquapendisse ultrices gravida.</p>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-7.jpg">
                                <div class="categories__text">
                                    <h4>Women’s fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-8.jpg">
                                <div class="categories__text">
                                    <h4>Caps</h4>
                                    <p>273 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-9.jpg">
                                <div class="categories__text">
                                    <h4>Footwears</h4>
                                    <p>159 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-0.jpg">
                                <div class="categories__text">
                                    <h4>Watches</h4>
                                    <p>792 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".women">Women’s</li>
                        <li data-filter=".men">Men’s</li>
                        <li data-filter=".kid">Caps</li>
                        <li data-filter=".accessories">Watches</li>
                        <li data-filter=".cosmetic">Footwears</li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                            <div class="label new">New</div>
                            <ul class="product__hover">
                                <li><a href="img/product/product-10.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix men">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-20.jpg">
                            <ul class="product__hover">
                                <li><a href="img/product/product-20.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                            <div class="label stockout">out of stock</div>
                            <ul class="product__hover">
                                <li><a href="img/product/product-3.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-40.jpg">
                            <ul class="product__hover">
                                <li><a href="img/product/product-40.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-5.jpg">
                            <ul class="product__hover">
                                <li><a href="img/product/product-5.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                            <div class="label sale">Sale</div>
                            <ul class="product__hover">
                                <li><a href="img/product/product-6.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N4999.0 <span>N5999.0</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                            <ul class="product__hover">
                                <li><a href="img/product/product-7.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N5999.0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                            <div class="label">Sale</div>
                            <ul class="product__hover">
                                <li><a href="img/product/product-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Product Name</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">N4999.0<span>N5999.0</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
    <!--
    <section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>JLG Collection</span>
                                <h1>The Project Jacket </h1>
                                <a href="#">Pre-order</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>JLG Collection</span>
                                <h1>The Project Jacket (Coming Soon)</h1>
                                <a href="#">Pre-order</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>JLG Collection</span>
                                <h1>The Project Jacket (Coming Soon)</h1>
                                <a href="#">Pre-order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
    <!-- Banner Section End -->

    <!-- Blog Extract starts -->
    <div class="col-lg-4 col-md-4">
        <div class="section-title">
            <h4>Blog</h4>
        </div>
    </div>
    <div class="blog__item">
        <div class="blog__item__pic set-bg large__item " data-setbg="img/blog/blog-8.jpg"></div>
        <div class="blog__item__text">
            <h6><a href="#">Kim Kardashian Steps Out In Paris Wearing Shocking Sparkly...</a></h6>
            <ul>
                <li>by <span>Victor</span></li>
                <li>Aug 04, 2020</li>
            </ul>
            <a href="#" style="color: #ca1515;">Click here to Read more here</a>
        </div>

        <!-- Blog Extract Ends -->

        <!-- Trend Section Begin -->
        <section class="trend spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="trend__content">
                            <div class="section-title">
                                <h4>Hot Trend</h4>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/ht-1.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/ht-2.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/ht-3.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="trend__content">
                            <div class="section-title">
                                <h4>Best seller</h4>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/bs-1.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/bs-2.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/bs-3.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="trend__content">
                            <div class="section-title">
                                <h4>Feature</h4>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/f-1.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/f-2.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                            <div class="trend__item">
                                <div class="trend__item__pic">
                                    <img src="img/trend/f-3.jpg" alt="">
                                </div>
                                <div class="trend__item__text">
                                    <h6>Product Name</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">N5999.0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Trend Section End -->

        <!-- Discount Section Begin -->
        <section class="discount">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="discount__pic">
                            <img src="img/discount.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="discount__text">
                            <div class="discount__text__title">
                                <span>Discount</span>
                                <h2>Summer 2020</h2>
                                <h5><span>Sale</span> 50%</h5>
                            </div>
                            <div class="discount__countdown" id="countdown-time">
                                <div class="countdown__item">
                                    <span>22</span>
                                    <p>Days</p>
                                </div>
                                <div class="countdown__item">
                                    <span>18</span>
                                    <p>Hour</p>
                                </div>
                                <div class="countdown__item">
                                    <span>46</span>
                                    <p>Min</p>
                                </div>
                                <div class="countdown__item">
                                    <span>05</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Discount Section End -->

        <!-- Services Section Begin -->
        <section class="services spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-car"></i>
                            <h6>Free Shipping</h6>
                            <p>For all oder over N99,999</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fas fa-money-bill-alt"></i>
                            <h6>Money Back Guarantee</h6>
                            <p>If good have Problems</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fas fa-question-circle"></i>
                            <h6>Online Support 24/7</h6>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="services__item">
                            <i class="fa fa-headphones"></i>
                            <h6>Payment Secure</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <?php
            include("include/footer.php")
        ?>
