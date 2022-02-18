<?php require_once "controllerAdminData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Admin Forgot Password</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Admin Forgot Password</h1>

            <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
            ?>
            
            <form action="admin-forgot-password.php" method="post" autocomplete="">
               
                <input type="email" name="email" placeholder="Enter Email Address" required value="<?php echo $email ?>">
                
                <button class="button" type="submit" name="check-email" value="Continue">Continue</button>
            </form>

        </section>
    </div>

</body>
</html>