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
   <link rel="stylesheet" href="signupstudent-TES.css">
   <title>Application for TES</title>
</head>
<body>
   
<section>

<div class="announce">
   <h1 style="font-size:32px;">TES Application Form</h1>
   <form action="includes/studentsignuphomepage-TES.inc.php" method="post">
      <div class="announcement-con">

         <div class="input_field">
            <label for="">Email Address</label>
            <input type="email" name="email" id="email">
         </div>

         <h2>Student Profile</h2>

         <div class="input_field">
            <label for="">Learner's Reference Number</label>
            <input type="text" name="lrn" id="lrn">
         </div>
         
         <div class="input_field">
            <label for="">Student Number</label>
            <input type="text" id="studentnumber" name="studentnumber" style="text-transform:uppercase" required
            minlength="12" maxlength="12">
         </div>

         <div class="input_field">
            <label for="">Last Name</label>
            <input type="text" name="lname" id="lname">
         </div>

         <div class="input_field">
            <label for="">First Name</label>
            <input type="text" name="fname" id="fname">
         </div>

         <div class="input_field">
            <label for="">Middle Name</label>
            <input type="text" name="mname" id="mname">
         </div>

         <div class="input_field">
            <label for="">Name Extension (i.e. Jr, II, etc)</label>
            <input type="text" name="extname" id="extname">
         </div>

         <div class="input_field">
            <label for="">Sex</label>
            <select name="sex" id="sex">
               <option value="male">Male</option>
               <option value="female">Female</option>
            </select>
         </div>

         <div class="input_field">
            <label for="birthdate">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate">
         </div>

         <div class="input_field">
            <label for="yearlevel">Year Level</label>
            <select name="yearlevel" id="yearlevel">
               <option value="1" id="1">First Year</option>
               <option value="2" id="2">Second Year</option>
               <option value="3" id="3">Third Year</option>
               <option value="4" id="4">Fourth Year</option>
            </select>
         </div>

         <div class="input_field">
            <label for="">Person with Disability</label>
            <select name="pwd" id="pwd">
               <option value="pwdno">No</option>
               <option value="pwdyes">Yes</option>
            </select>
         </div>

         <div class="input_field">
            <label for="">If yes, what is your Disability?</label>
            <input type="text" name="disability" id="disability">
         </div>
         
         <h2>Father's Profile</h2>

         <div class="input_field">
            <label for="">Last Name</label>
            <input type="text" name="flname" id="flname">
         </div>
         <div class="input_field">
            <label for="">First Name</label>
            <input type="text" name="ffname" id="ffname">
         </div>
         <div class="input_field">
            <label for="">Middle Name</label>
            <input type="text" name="fmname" id="fmname">
         </div>
         <div class="input_field">
            <label for="">Name Extension (i.e. Jr, II, etc)</label>
            <input type="text" name="fextname" id="fextname">
         </div>
         
         <h2>Mother's Profile</h2>

         <div class="input_field">
            <label for="">Last Name</label>
            <input type="text" name="mlname" id="mlname">
         </div>
         <div class="input_field">
            <label for="">First Name</label>
            <input type="text" name="mfname" id="mfname">
         </div>
         <div class="input_field">
            <label for="">Middle Name</label>
            <input type="text" name="mmname" id="mmname">
         </div>
         <div class="input_field">
            <label for="">Name Extension (i.e. Jr, II, etc)</label>
            <input type="text" name="mextname" id="mextname">
         </div>

         <h2>Family Profile</h2>

         <div class="input_field">
            <label for="">Is your family a 4P's member?</label>
            <select name="4p" id="4p">
               <option value="N4P">No</option>
               <option value="Y4P">Yes</option>
            </select>
         </div>

         <div class="input_field">
            <label for="">If yes, what is your Household DSWD Number?</label>
            <input type="text" name="dswd" id="dswd">
         </div>
         
         <div class="input_field">
            <label for="">Father's Highest Educational Attainment</label>
            <select name="fedu" id="fedu">
               <option value="ent">Elementary (not finished)</option>
               <option value="ec">Elementary (completed)</option>
               <option value="hsnt">Highschool (not finished)</option>
               <option value="hsc">Highschool (completed)</option>
               <option value="cnt">College (not finished)</option>
               <option value="cc">College (completed)</option>
               <option value="mdh">Master's Degree Holder</option>
               <option value="ddh">Doctorate Degree Holder</option>
               <option value="nsc">No schooling Completed</option>
            </select>
         </div>

         <div class="input_field">
            <label for="">Father's Employment Status</label>
            <select name="fes" id="fes">
               <option value="pt" id="pt">Part Time / Job Order</option>
               <option value="ct" id="ct">Contractual</option>
               <option value="rr" id="rr">Regular</option>
               <option value="ne" id="ne">Not Employed</option>
            </select>
         </div>
         
         <div class="input_field">
            <label for="">Mother's Highest Educational Attainment</label>
            <select name="medu" id="medu">
               <option value="ment">Elementary (not finished)</option>
               <option value="mec">Elementary (completed)</option>
               <option value="mhsnt">Highschool (not finished)</option>
               <option value="mhsc">Highschool (completed)</option>
               <option value="mcnt">College (not finished)</option>
               <option value="mcc">College (completed)</option>
               <option value="mmdh">Master's Degree Holder</option>
               <option value="mddh">Doctorate Degree Holder</option>
               <option value="mnsc">No schooling Completed</option>
            </select>
         </div>
         
         <div class="input_field">
            <label for="">Mother's Employment Status</label>
            <select name="mes" id="mes">
               <option value="mpt" id="pt">Part Time / Job Order</option>
               <option value="mct" id="ct">Contractual</option>
               <option value="mrr" id="rr">Regular</option>
               <option value="mne" id="ne">Not Employed</option>
            </select>
         </div>
         
         <div class="input_field">
            <label for="">Monthly Family Income</label>    
            <input type="text" name="mfi" id="mfi">
         </div>
         <small>Monthly Family Income refers to the total income of all members of the family who are already working and providing for the family. Example, Father's income (P12,000) + Brother's income (P10,000) = P22,000</small><br><br>

         <div class="input_field">
            <label for="">Total No. of Household Members</label>
            <input type="text" name="nhm" id="nhm">
         </div>
         <small>This refers to the total number of family members benefiting with your Monthly Family Income. Example, members of the family are mother, father, 3 brothers and 1 sister: Total No. = 6</small><br><br>

         <h2>Present Address</h2>
         
         <div class="input_field">
            <label for="">Municipality/City</label>
            <input type="text" name="city" id="city" style="text-transform:uppercase">
         </div>

         <div class="input_field">
            <label for="">Province</label>
            <input type="text" name="province" id="province" style="text-transform:uppercase">
         </div>

         <div class="input_field">
            <label for="">Zip Code</label>
            <input type="text" maxlength="4" id="zip" name="zip" id="zip">
         </div>

         <button type="submit"  name="submit">Submit</button>
      </div>
      
   </form>

</div>

<div class="sobra">
   <a id="back" href="DashboardScholar.php">Back</a>
</div>

</section>


<!--
   <nav class="navigation-bar">
        <div class="navigation-logo">
            <img class="logo" src="images/puplogo.png" alt="">
            <div class="navigation-title">PUPSMB Scholarship Portal</div>
        </div>
        <ul class="navigation-menu">
            <li class="navigation-item">
                <a href="index.php" class="navigation-link">Home</a>
            </li>
            <li class="navigation-item">
                <a href="announcement.php" class="navigation-link">Announcement</a>
            </li>
            <li class="navigation-item">
                <a href="FAQ.php" class="navigation-link">FAQ</a>
            </li>
            <li class="navigation-item">
                <a href="Log-in.php" class="navigation-link">Login</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
   </nav>
-->
   

</body>
</html>