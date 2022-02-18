<?php require_once "adminLogin\controllerAdminData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Log-in</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <a href="index.php"><img class="bgimage" src="images/puplogo.png" alt=""></a>
            <h1>PUP Scholarship Portal</h1>
            <h3>Admin Module</h3>
            <br>

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

            <form action="admin.php" method="post" autocomplete="">
                <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                <input type="password" name="adminPwd" placeholder="Password" required>
                <button class="button" type="submit" name="login" value="login">Login</button>
                <div>
                    <a href="adminLogin\admin-signup.php">Sign Up</a>
                </div>
                <div class="forgot">
                    <a href="adminLogin\admin-forgot-password.php">Forgot password?</a>
                </div>
            </form>

            


        <p>By using this service, you understood and agree to the PUP Online Services <a href="https://www.pup.edu.ph/terms/">Terms of Use <a>and <a href="https://www.pup.edu.ph/privacy/">Privacy Statement</a></p>
        </section>
    </div>

</body>
</html>