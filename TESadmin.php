<?php require_once "adminLogin/controllerAdminData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['adminPwd'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admin_table WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: admin-reset-code.php');
            }
        }else{
            header('Location: admin-otp.php');
        }
    }
}else{
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="TESAdmin.css">
    <title><?php echo $fetch_info['adminName'] ?> | TES Admin</title>
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
                    <a href="DashboardAdmin.php"><i class="fas fa-file-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="TDPadmin.php"><i class="fas fa-file-alt"></i>Tulong Dunong Program</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-file"></i>Tertiary Education Subsidy</a>
                </li>
                <li>
                    <a href="LiquidationAdmin.php"><i class="fas fa-file"></i>Liquidation</a>
                </li>
                <li>
                    <a href="PastScholarsAdmin.php"><i class="fas fa-file"></i>Past Scholar Records</a>
                </li>   
            </ul>
        </div>
    </div>

    <main>
        <div class="container">
            
        </div>
    </main>

</body>
</html>