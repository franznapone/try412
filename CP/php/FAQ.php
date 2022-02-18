<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="FAQ.css">
    <title>FAQ</title>
</head>
<body>
    
    <nav class="navigation-bar">
        <div class="navigation-logo">
            <img class="logo" src="images\puplogo.png" alt="">
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
            <?php
              if (isset($_SESSION["adminUsername"])) {
                echo "<li class='navigation-item'>
                          <a href='logout.php' class='navigation-link'>Log out</a>
                      </li>";
              }
              else {
                echo "<li class='navigation-item'><a href='Log-in.php' class='navigation-link'>Login</a></li>";
              }
            ?>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <div class="box">
        <p class="heading">FAQs</p>
        <div class="faqs">
           <details>
              <summary>Is there a grade requirement for TES?</summary>
              <p class="text">There's no GWA to maintain to qualify for TES. As long as you are qualified under the existing qualifications above, then you are eligible to apply in TES.
              </p>
           </details>

           <details>
              <summary>Can I avail of the CHED Scholarship and another government-funded scholarship at the same time?
              </summary>
              <p class="text">As per CHED Memorandum Order No. 08 Series of 2019, CHED scholars are entitled only to one government-funded scholarship. Once you become a CHED scholar, you cannot avail of other government-funded scholarship programs such as DOST Scholarship and OWWA Scholarship.  Meanwhile, there are no sections in the CHED Scholarship policies and guidelines that indicate restrictions on having a local government-funded scholarship. However, it is still helpful to ask your CHEDRO about this matter.
            </p>
           </details>

           <details>
              <summary>How To Maintain CHED Scholarship?
            </summary>
              <p class="text">Once you have been qualified as a CHED scholar, there are two things you need to remember to maintain it – the CHED scholarship’s grade qualification and the grounds for termination.
            </p>
           </details>

           <details>
              <summary>What is the CHED Scholarship Maintaining GWA?
            </summary>
              <p class="text">The CHED Scholarship maintaining grades are as follows:
            </p>
            <ul class="mid-text">
                <li>If you are a SSP or PESFA Full-Scholar: 85%
                </li><br>
                <li>If you are a SSP or PESFA Half-Scholar: 80%
                </li>
              </ul>  
           </details>

           <details>
              <summary>What Are the CHED Scholarship’s Grounds for Termination? 
            </summary>
            <ul class="mid-text">
                <br><li>Enrollment in a non-priority program
                </li><br>
                <li>Not carrying a regular load (number of units)
                </li><br>
                <li>Shifting to another program or transferring to another HEI without concerned CHEDRO’s approval
                </li><br>
                <li>Submission of fake documents
                </li><br>
                <li>Offenses involving moral turpitude
                </li><br>
                <li>Participation in a fraternity or sorority hazing activities
                </li><br>
                <li>Non-completion of the degree program
                </li><br>
              </ul>  
           </details>

           <details>
              <summary>Is there an exam for the CHED Scholarship Program?
            </summary>
              <p class="text">CHED Scholarship has no qualifying exam. You only need to submit the requirements and meet the scholarship’s qualifications.</p>
           </details>

           <details>
            <summary>Does the CHED Scholarship have a Return Service Agreement?
            </summary>
            <p class="text">Unlike DOST Scholarship, the CHED Scholarship doesn’t involve a return service agreement that scholars need to comply with after enjoying its benefits.
            </p>
         </details>

         <details>
            <summary>When do I have to refund my CHED Scholarship?
            </summary>
            <p class="text">You only have to refund the benefits you received if you had committed any of the following:
            </p>
            <ul class="mid-text">
                <li>Enrollment in any of CHED non-priority program
                </li><br>
                <li>Submission of fake documents
                </li><br>
                <li>Offense involving moral turpitude
                </li><br>
                <li>Involvement in any fraternity or sorority hazing activities
                </li>
              </ul>  
         </details>

         <details>
            <summary>If I transferred school, will I still be a TES grantee?
            </summary>
            <p class="text">It is important that you take into consideration the qualification/eligibility requirements and the prioritization categories of TES if you will be transferring. Take note of the following below:
            </p>
            <ul class="mid-text">
                <li>If you are in the Listahanan category, you will still be a TES grantee as long as you transfer in an SUC, or CHED-recognized LUC, or if in a Private University, make sure you are enrolled in a CHED-recognized program/course. Also, make sure you provide endorsement letters from your previous school and the school you transferred to the CHED Regional Office is endorsing you to avoid problems.
                </li><br>
                <li>If you are in the PNSL category, make sure you transfer in a Private University or College in a city or municipality that have no SUCs or LUCs, and enrolled programs/courses that are CHED-recognized. Once you transferred in an SUC or LUC, or in a Private College located in a city/municipality that has SUC or LUC, you will not be eligible under PNSL category anymore, thus, losing your TES.
                </li>
              </ul>  
         </details>

         <details>
            <summary>If I am a TES grantee and I stopped school for a while, can I still be a grantee once I enroll again?
            </summary>
            <p class="text">Read the following provisions below to check if you can still be a TES continuing grantee.
                Under the TES Guidelines
                </p>
                <h3>XVII. RENEWAL PROCEDURES
                </h3>
                <p>5. TES grantees who did not enroll for a certain semester should still be considered as continuing grantees provided that the following concur: <br>
                    5.1. The period of non-enrollment of the student should only for one (1) semester in an academic year; <br>
                    5.2. There is a duly filed official Leave of Absence (LOA); and, <br>
                    5.3. The student continues to be eligible for the benefits of TES. 
                    </p>  
         </details>

         <details>
            <summary>Is TES application open for all year levels? What if I am in my Sophomore or Junior year?
            </summary>
            <p class="text">TES application is open for all year levels. So even if you are already in your 3rd year, if you are qualified and eligible, you can still apply for TES. And if you belong in the TES Priority Categories, included in the ranking covered by the budget, and approved in the validation, you will be included as a TES grantee. 
            </p>
         </details>

         <details>
            <summary>Do I need to Apply to be a Scholar of Tulong Dunong Program?
            </summary>
            <p class="text">No, because CHED is the one who will choose whose students will be the grantees. You just need to wait if you are one of the lists of grantees in TDP.</p>
         </details>

        </div>
     </div>
    

    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script src="/js/app.js"></script>
</body>
</html>