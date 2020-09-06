<?php

define("TITLE","Create New Password | Just Ladies & Gentlemen");
include("include/header.php")
?>

        <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
               echo "Request couldn't be validated";
            }
            else{
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                   ?>

                    <div id="login-container">
                        <div class="login-box">
                        <h1>Create New Password</h1>
                        
                        <form action="include/reset-password.inc.php" method="post">

                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                        <div class="textbox">
                            <i class="fas fa-lock"></i>
                            <input type="text" placeholder="Enter New Password " name="pwd">
                        </div>

                        <div class="textbox">
                            <i class="fas fa-lock"></i>
                            <input type="text" placeholder="Repeat New Password " name="pwdRepeat">
                        </div>
                        <input type="submit" class="btn" value="Reset Password" name="reset-password-submit">
                        
                        </form>

                   <?php
                }
            }
        ?>
  
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
