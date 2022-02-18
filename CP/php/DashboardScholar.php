<?php require_once "studentLogin/controllerStudentData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['studentPwd'];
if($email != false && $password != false){
    $sql = "SELECT * FROM student_table WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: student-reset-code.php');
            }
        }else{
            header('Location: student-otp.php');
        }
    }
}else{
    header('Location: student-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="DashboardScholar.css">
    <title><?php echo $fetch_info['studentName'] ?> | Dashboard</title>
</head>
<body>
    
    <header>
        <div class="header-container">
            <img src="images/puplogo.png" height="70px" alt="">
            <h1>PUPSMB SCHOLARSHIP PORTAL</h1>
        </div>
    </header>

    <div class="sidebar">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a class="border-top" href="#"><i class="fas fa-file-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a class="border-top" href="TDPscholar.php"><i class="fas fa-file-alt"></i>Tulong Dunong Program</a>
                </li>
                <li>
                    <a href="TESscholar.php"><i class="fas fa-file"></i>Tertiary Education Subsidy</a>
                </li>
                <li>
                    <a class="border-top" href="LiquidationScholar.php"><i class="fas fa-file-alt"></i>Liquidation</a>
                </li>
            </ul>
        </div>
    </div>

    <main>
         
         <div class="container">
            <div class="container-header">
               <h3>Scholarship Status</h3>
            </div>

            <div class="row">
                <div class="column">
                    <div class="card">
                    <h3>TDP</h3>
                    <p>Pending for Approval</p>
                    <br>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                    <h3>TES</h3>
                    <p>Pending for Approval</p>
                    <a href="signupstudent-TES.php">Apply Here</a>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <h3>Requirements Status</h3>
                    <p>Unavailable</p>
                    <br>
                    </div>
                </div>
                
            </div>

         </div>
    
         <div class="logout">
            <a href="studentLogin/logout-student.php">
               <button class="btnlogout">Logout</button>
            </a>
         </div>
    </main>

</body>
</html>