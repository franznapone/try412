<?php require_once "controllerStudentData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: ../student-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Reset Code</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Reset Code</h1>

            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
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
            
            <form action="student-reset-code.php" method="post" autocomplete="">
               
                <input type="number" name="otp" placeholder="Enter Code" required>

                <button class="button" type="submit" name="check-reset-otp" value="Submit">Submit</button>
            </form>

        </section>
    </div>

</body>
</html>