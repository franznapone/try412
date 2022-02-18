<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="all.css">
   <link rel="stylesheet" href="signupstudentHOME.css">
   <title>Application for TDP</title>
</head>
<body>

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

   <section>
      <div class="announce">
         <h1 style="font-size:32px;">TDP Application Form</h1>
         <form action="includes/studentsignuphomepage.inc.php" method="post">
            <div class="announcement-con">

               <div class="input_field">
                  <label for="">First Name</label>
                  <input type="text" name="fname">
               </div>
               <div class="input_field">
                  <label for="">Middle Name</label>
                  <input type="text" name="mname">
               </div>
               <div class="input_field">
                  <label for="">Last Name</label>
                  <input type="text" name="lname">
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
                  <label for="studentnumber">Student Number</label>
                  <input type="text" id="studentnumber" name="studentnumber" style="text-transform:uppercase" required
                  minlength="12" maxlength="12">
               </div>

               <div class="input_field">
                  <label for="">Course</label>
                     <select name="course" id="course">
                        <option value="bsa">BSA</option>
                        <option value="bscpe">BSCPE</option>
                        <option value="bsentrep">BSENTREP</option>
                        <option value="bshm">BSHM</option>
                        <option value="bsit">BSIT</option>
                        <option value="bseden">BSEDEN</option>
                        <option value="bsedmt">BSEDMT</option>
                        <option value="domtlom">DOMTLOM</option>
                     </select>
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
                  <label for="barangay">Barangay</label>
                  <input type="text" name="barangay" id="barangay" style="text-transform:uppercase">
               </div>

               <div class="input_field">
                  <label for="zip">Zip code</label>
                  <input type="text" maxlength="4" id="zip" name="zip" id="zip">
               </div>

               <div class="input_field">
                  <label for="">Person with Disability</label>
                  <select name="pwd" id="pwd">
                     <option value="pwdno">No</option>
                     <option value="pwdyes">Yes</option>
                  </select>
               </div>

               <div class="input_field">
                  <label for="phone">Contact Number</label>
                  <input type="tel" name="phone" id="phone" maxlenght="11">
               </div>

               <div class="input_field">
                  <label for="email">Email Address</label>
                  <input type="email" name="email" id="email">
               </div>

               <div class="input_field">
                  <label for="">General Weighted Average</label>
                  <input type="number" placeholder="1.00" name="gwa" id="gwa" min="1" max="5" step="0.01" required>
               </div>

               

               

               <button type="submit"  name="submit">Submit</button>
            </div>
         </form>
      </div>
   </section>
</body>
</html>