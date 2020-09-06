<?php

define("TITLE","Login | Just Ladies & Gentlemen");
include("include/header.php")
?>

  <div id="login-container">
      <div class="login-box">
      <h1>Login</h1>
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
        elseif($_GET['error'] == "sqlerror"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> Server Error!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "nouser"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> Email does not exist!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
        elseif($_GET['error'] == "wrongpassword"){
          echo "<div class='alert alert-danger alert-dismissible fade show alert-box' role='alert'>
                 <p> Wrong Password!</p>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
            </div>";
        }
      }
      elseif(isset($_GET['signup'])){
        if($_GET['signup'] == "success"){
        echo "<div class='alert alert-success alert-dismissible alert-box fade show' role='alert'>
              <p> <strong>Well Done</strong> SignUp successful</p>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
          </div>";
      }
    }
    elseif(isset($_GET['newpwd'])){
      if($_GET['newpwd'] == "updated"){
      echo "<div class='alert alert-success alert-dismissible alert-box fade show' role='alert'>
            <p> <strong>Well Done</strong> Password successfully changed</p>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
        </div>";
      }
    }
        ?>
      <form action="include/login.inc.php" method="post">
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Email" name="email">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="pwd">
      </div>

      <input type="submit" class="btn" value="Sign in" name="login-submit">
      
      <a href="./register.php" class="btn reg-btn">Sign Up</a>
      <a href="reset-password.php" class="__link">Forgot Password</a>
      </form>
    </div>
  </div>
  <?php
include("include/footer.php")
?>
