<?php require_once "controllerStudentData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Sign Up</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Sign Up</h1>

            <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
            ?>
            
            <form action="student-signup.php" method="post" autocomplete="">
               <input type="text" name="studentName" placeholder="Full Name" required value="<?php echo $name ?>">
                <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                <input type="password" name="studentPwd" placeholder="Password" required>
                <input type="password" name="studentPwdcheck" placeholder="Confirm Password" required>     
                <button class="button" type="signup" name="signup" value="Signup">Sign Up</button>
                <div>
                   <h4>Already a member?<a href="../student-login.php"> Login Here</a></h4>
                </div>
            </form>

        </section>
    </div>

</body>
</html>