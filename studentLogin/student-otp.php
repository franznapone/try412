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
    <title>Code Verification</title>
</head>
<body>
    
    <div class="container">
        <section class="right-section">
            <img class="bgimage" src="../images/puplogo.png" alt="">
            <h1>Code Verification</h1>

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
            
            <form action="student-otp.php" method="post" autocomplete="">
               
                <input type="number" name="otp" placeholder="Enter verification code" required>

                <button class="button" type="submit" name="check" value="Submit">Submit</button>
            </form>

        </section>
    </div>

</body>
</html>