<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up Page</title>
</head>
<body>
   <section>
      <h2>Sign Up</h2>
      <form action="includes/signup.inc.php" method="post">
         <input type="text" name="adminname" placeholder="Full Name">
         <input type="text" name="adminusername" placeholder="Username">
         <input type="password" name="adminpwd" placeholder="Password">
         <input type="password" name="adminpwdrepeat" placeholder="Repeat Password">
         <button type="submit" name="submit">Sign Up</button>
      </form>

      <?php
         if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
               echo "<p>Fill in all the empty fields!</p>";
            }
            else if ($_GET["error"] == "invalidAdminusername") {
               echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "passwordsdonotmatch") {
               echo "<p>Password doesn't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
               echo "<p>Something went wrong, Try again.</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
               echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
               echo "<p>You have signed up!</p>";
            }
         }
      ?>

   </section>
</body>
</html>