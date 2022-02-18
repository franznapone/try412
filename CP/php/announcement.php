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
    <title>Announcement</title>
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
        <h1>ANNOUNCEMENT</h1>
        <div class="announcement-con">
            <p>1. Dear PUP Sta. Maria Students: The application for the CHED Tertiary Education Subsidy (TES) for School Year 2020-2021 is now OPEN. TES is one of the four programs under the RA 10931 (UNIVERSAL ACCESS TO QUALITY TERTIARY EDUCATION ACT). All applications will be submitted and evaluated by the Commission on Higher Education (CHED). Upon evaluation of CHED, qualified applicants will be receiving an education subsidy for SY 2021-2022. You may apply For more details about how to apply for a TES scholarship, you may click how to apply on this page. The deadline of application is AUGUST 20, 2022.</p>
            <p>2. List of New  CHED Tertiary Education Subsidy (TES) Beneficiaries for the AY 2022: 
                Greetings! We are happy to announce the List of CHED Tertiary Education Subsidy (TES) Beneficiaries for the Academic Year 2022-2023. To all beneficiaries, please wait for further instructions. Thank you and Congratulations!.</p>
        </div>
    </div>

    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script src="/js/app.js"></script>
</body>
</html>