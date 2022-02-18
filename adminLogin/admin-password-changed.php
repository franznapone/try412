<?php require_once "controllerAdminData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: ../admin.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Admin Password Changed</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Admin Password Changed</h1>

            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
            
            <form action="../admin.php" method="post" autocomplete="">
                <button class="button" type="submit" name="login-now" value="Login now">Login Now</button>
            </form>

        </section>
    </div>

</body>
</html>