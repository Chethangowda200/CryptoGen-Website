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
            <h1>CryptoGen</h1>
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
        <?php
				if(isset($_POST['staffRegisterSubmit'])) {
          $userid = $_POST["userId"];
					$email = $_POST["email"];
					
					$password = $_POST["password"];
					$rePassword = $_POST["rePassword"];


          if($password==$rePassword){
            $password = md5($_POST["password"]);
            $q="INSERT INTO `USERS` (`username`,`email`,`passStaff`) VALUES ('$userid','$email','$password')";
          // $q= " INSERT INTO `user` ( `email`, `userStaff`, `passStaff`,)"." VALUES ( 'ddd', 'ddd', 'ddd', 'ddd')";
            $result=$mysqli->query($q);
            if(!$result){
              echo "INSERT failed. Error: ".$mysqli->error ;
              // break;
            }
            else {
              header("Refresh: 2; url=index.php");

              echo '<h1 style="text-align: center; font-family: monospace;">REGISTER DONE!.<h1>';
            }
          }
          else{
            header("Refresh: 2; url=index.php");
            echo "<h1>Password does not match!</h1>";
          }

				}
			?>

      </div>
    </div>

  <footer>
    <div class="footerContent">
      <div class="leftFooter">
        <h1 id="followUs">Follow us . . </h1>
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
