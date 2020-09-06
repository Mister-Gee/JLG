<?php

define("TITLE","Reset Password | Just Ladies & Gentlemen");
include("include/header.php")
?>

  <div id="login-container">
      <div class="login-box">
      <h1>Reset Password</h1>
      
      <form action="include/reset-request.inc.php" method="post">
      <p class="reset-p">An E-mail will be sent to you with instructions on how to reset your password </p>
     
      <div class="textbox">
        <i class="fas fa-envelope"></i>
        <input type="text" placeholder="Enter your Email address..." name="email">
      </div>

      

      <input type="submit" class="btn" value="Reset Your Password" name="reset-request-submit">
      
      </form>
      <?php
      if (isset($_GET['reset'])) {
        if($_GET['reset'] == "success"){
          echo "<div class='alert alert-success alert-dismissible fade show ' role='alert'>
                 <p> Password Reset Successful !</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
      }
        ?>
    </div>
  </div>
  <?php
include("include/footer.php")
?>
