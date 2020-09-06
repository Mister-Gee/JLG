<?php
define("TITLE","Profile | Just Ladies & Gentlemen");
include("include/header.php");
if (isset($_SESSION['Name'])) {

?>
<div id="container main-content">
<div class="top-content">
<h3><?php echo $name;?></h3>
<h6>Member</h6>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
<img src="img/img.jpg" class="rounded-circle">
</div>
<div class="clr"></div>
<div class="profile-btn">
    <button class="blog-btn profile-btn-after">BLOG</button>
    <button class="product-btn">PRODUCTS</button>
    <button class="sales-btn">SALES</button>
</div>

<div class="buttom-content">
<section class="blog-post-content contact__form show">
<?php

?>
    <h5>Post to Blog</h5>

<form action="include/post-blog.inc.php" method="POST" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title"><br>

    <label for="content">Content:</label>
    <textarea name="content"> </textarea><br>

    <label for="blg-image">Image:</label><br>
    <input type="file" name="blg-image" id="image-upload"><br>

    <label for="category">Category:</label> <br>
    <select name="category">
        <option value="0">General</option>
        <option value="1">Women's Blog</option>
        <option value="2">Men's Blog</option>
    </select><br><br>
    <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['Name'];?>">
    <input type="submit" class="site-btn" id="post-btn" value="Post" name="post-blog">
</form>
</section>
<section class="product-post-content contact__form">
<h5>Post New Product</h5>
<form>
    <label for="name">Name of product:</label>
    <input type="text" name="name"><br>

    <label for="description">Description:</label>
    <textarea name="description"> </textarea><br>
    
    <label for="product-image">Image:</label><br>
    <input type="file" name="product-image" id="image-upload"><br>


    <label for="category">Category:</label> <br>
    <select name="category">
        <option value="general">General</option>
        <option value="womens">Womens</option>
        <option value="mens">Mens</option>
        <option value="caps">Caps</option>
        <option value="watches">Watches</option>
        <option value="footwear">Footwear</option>
    </select><br><br>


    <input type="submit" class="site-btn" id="post-btn" value="Post Product" name="post-product">
</form>
</section>
<section class="sales-post-content contact__form">
  <h5>Sales</h5>
</section>
</div>
</div>
 <?php  
}
else{
   
    header("Location: index.php");
    exit();
}
?>


<?php
include("include/footer.php")
?>
