<?php

define("TITLE","Register | Just Ladies & Gentlemen");
include("include/header.php")
?>

  <div id="login-container">
      <div class="login-box signUp">
      <h1>Sign Up</h1>
      <?php
      if (isset($_GET['error'])) {
        if($_GET['error'] == "emptyfields"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> All fields are required!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "invalidmail"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> Invalid Email!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "passwordcheck"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> Your Password do not match!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "emailtaken"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> You are registered user already, Login to continue !</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "sqlerror"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                <p> Server Error!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "newpwderror"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                <p> New password fields can't be empty <br> Pls restart the process !</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "pwdmatchfail"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                <p> New password do not match <br> Pls restart the process !</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
      }
    
      
      ?>
   <form action="include/signup.inc.php" method="post">
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Full name" name="fullname">
      </div>

      <div class="textbox">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email" name="email">
      </div>

      <div class="textbox">
        <i class="fas fa-phone"></i>
        <input type="text" placeholder="Phone Number" name="phonenumber">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="pwd">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Re-type Password" name="pwd-repeat">
      </div>

      <input type="submit" class="btn" value="Sign up" name="signup-submit">
</form>
    </div>
  </div>
  <?php
include("include/footer.php")
?>
