<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CryptoGen</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
    <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="50" height="50" alt="Cryptex logo">
           <h1> CryptoGen</h1>
          </a>
      <div class="topnav">
        <a href="index.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up</h1>
        <hr>
        <br>
        <form action="finishregister.php" method="post">
        
          <label for="username">username</label>
          <input type="text" id="userid" name="userId" placeholder="Your ID">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email" pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})" title="Enter a valid email id">

          
          <label for="password">Password</label>
          <input type="password"  name="password" class="fields" placeholder="Your password" value="" maxlength="15" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must contain at least one number and one uppper case and one lowercase letter and 8 characters" required>
          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="staffRegisterSubmit"value="Submit">
        </form>
      </div>
    </div>
    
  <footer>
    <div class="footerContent">
      <div class="leftFooter">
        <h2 id="followUs">Follow us . . </h2>
        <div class="iconWrapper">
          <a href="https://www.facebook.com/">
            <img class="socialIcon" src="facebook.png" border="0" />
          </a>
          <a href="https://www.instagram.com/">
            <img class="socialIcon" src="ig.png" border="0" />
          </a>
          <a href="https://twitter.com/">
            <img class="socialIcon" src="twitter.png" border="0" />
          </a>
        </div>
      </div>
      <div class="rightFooter">
        <div class="memberCredit">
          <h2>&copy;&nbsp;Created by TeamL</h2>
        </div>  
        </div>
      </div>
    </div>
  </footer>

  </body>

</html>
