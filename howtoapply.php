<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="announcement.css">
    <title>How to Apply</title>
</head>
<body>
    
    <nav class="navigation-bar">
        <div class="navigation-logo">
            <img class="logo" src="images/puplogo.png" alt="">
            <div class="navigation-title">PUPSMB Scholarship Portal</div>
        </div>
        <ul class="navigation-menu">
            <li class="navigation-item">
                <a href="index.php" class="navigation-link">Home</a>
            </li>
            <li class="navigation-item">
                <a href="announcement.php" class="navigation-link">Announcement</a>
            </li>
            <li class="navigation-item">
                <a href="FAQ.php" class="navigation-link">FAQ</a>
            </li>
            <?php
              if (isset($_SESSION["adminUsername"])) {
                echo "<li class='navigation-item'>
                          <a href='logout.php' class='navigation-link'>Log out</a>
                      </li>";
              }
              else {
                echo "<li class='navigation-item'><a href='Log-in.php' class='navigation-link'>Login</a></li>";
              }
            ?>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <div class="announce">
        <h1>How to Apply</h1>
        <div class="announcement-con">
            <p>1. Once you are on the PUPSMB scholarship portal page, click "Apply Now."</p>
            <p>2. After clicking "Apply Now," you need to sign up first.</p>
            <p>3. Fill out the registration form. Type or select the required information and then click the sign-up. </p>
            <p>4. After you sign up, you can now fill out the application form.</p>
            <p>Make sure that all the information you have provided is spelled correctly. Your name and date of birth should be consistent with the information indicated in your PSA copy of your birth certificate.
                Ensure that the email address provided is active and correct.</p>
            <p>5. Click "Submit" once you have double-checked and verified the information you have submitted.</p>
            <p>6. After submitting your application, wait for the announcement if you are one of the scholarship grantees.</p>
        </div>
    </div>
      
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script src="/js/app.js"></script>
</body>
</html>