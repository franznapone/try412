<?php require_once "controllerAdminData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
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
    <title>Admin New Password</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Admin New Password</h1>

            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
            ?>
            
            <form action="admin-new-password.php" method="post" autocomplete="">
               
                <input type="password" name="adminPwd" placeholder="Create New Password" required>
                <input type="password" name="adminPwdcheck" placeholder="Confirm New Password" required>
                
                <button class="button" type="submit" name="change-password" value="Change">Change</button>
            </form>

        </section>
    </div>

</body>
</html>