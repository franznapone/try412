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
    <link rel="stylesheet" href="scholarshipsoffered.css">
    <title>Scholarships Offered and Requirements</title>
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

    <div class="announce">
        <h1>Scholarship Offered and Requirements</h1>
        <div class="announcement-con">
            <p>The Commission on Higher Education (CHED) is offering the <b>Grants-in-Aid Program</b> (Tulong Dunong Scholarship and Tertiary Education Subsidy) to support college students with financial aid needed to pursue their academic dreams.
            </p>
            <p>Filipino citizens are eligible to apply for this <b>CHED Scholarship Program</b>. The program offers the needed financial help for college enrolment for the students.
            </p>

            <h3> <b>Scholarship offered
            </br>TES</b>
            </h3>

            <h3>What is TES?</h3>
                <p>The Tertiary Education Subsidy or TES is one of the major components of Republic Act 10931 or the Universal Access to Quality Tertiary Education Act (UAQTEA).
                    It is not a scholarship but a grant-in-aid program that provides financial assistance to support at least the partial cost of tertiary education, inclusive of education-related expenses. It prioritizes students belonging in lower income households and provide access to quality tertiary education in city/town without state or local universities and colleges. The TES only opens its application once every Academic Year.
                    </p>

            <h3>What are the benefits of TES?
            </h3>
            <p>The benefits are the following:<br>
                Per Academic Year, qualified grantees receive a financial assistance in the amount of:
                </p>
                <p>1. Php 40,000 - for grantees enrolled in State Universities and Colleges (SUCs) or CHED-recognized Local Universities and Colleges (LUCs)<br>
                    2. Php 60,000 - for grantees enrolled in CHED-recognized programs of Private Higher Education Institutions (HEIs)
                    </p>
                <p>Additional benefits are: <br><br>
                    1. Php 30,000 - for grantees who are considered as Persons with Disability <br>
                    2. Php 10,000 - for grantees who will be taking the Board or Licensure Examinations (Maximum amount for one-time reimbursement, within 2 years from the A.Y. when the student graduated)
                </p>

                <h3>What are the Documentary Requirements I need to prepare for TES Scholarship?
                </h3>
                <p>UniFAST will process all the applications. Your school will notify you if you have been included in the list of potential grantees who qualified in the Nationwide TES Assessment. <br><br>
                    If you are included as one of the potential TES grantees, you will need to submit your Documentary Requirements to your school to validate your slot. This is needed to check and verify if you have met the qualifications and criteria set by the guidelines. <br><br>
                    Submit the following Documentary Requirements:
                    </p>

                    <ul class="mid-text">
                        <li>Certificate of Registration or Enrollment
                        </li><br>
                        <li>Assessment of Fees
                        </li><br>
                        <li>Certificate of Residency (if applicable, usually needed for PNSL)
                        </li><br>
                        <li>Photocopy of PWD ID (if applicable)
                        </li>
                      </ul>  

                <p>Some schools require these documents immediately as you apply. So it is important you coordinate with your school on how they implement their application process.
                </p>
                      
                <h3>What is CHED-Tulong Dunong Scholarship?</h3>
                <p>The <b>CHED-Tulong Dunong Scholarship</b> is intended for the high school graduates whose GWA is at least a passing grade and for graduating high school students whose GWA is at least a passing grade in the third year and in the three grading periods of the fourth year and who will enroll in identified priority courses in duly authorized public or private HEIs.
                </p>

                <h3>Eligible Criteria for Tulong Dunong Scholarship 2021
                </h3>

                <p>The following criteria must be met in order for applicants to be eligible for this <b>TDP Scholarship:</b>
                </p>

                <ul class="mid-text">
                    <li>Be a Filipino citizen of good moral character.
                    </li><br>
                    <li>Not be more than 30 years of age at the time of application except for senior citizens;
                    </li><br>
                    <li>Be a high school graduate or a candidate for graduation;
                    </li><br>
                    <li>Must have a combined annual gross income of parents/guardian not to exceed P300,000.000. For those who are exempted from filing income tax, there should be a certificate of tax exemption from the BIR. For OFW and seafarers, the latest copy of the contract or proof of income.
                    </li><br>
                    <li>Not be a recipient of any government scholarship and financial assistance.
                  </ul>
                  
                <p>The TULONG DUNONG is a Grants-in-Aid (GIA) under the Student Financial Assistance Programs (StuFAPS) of Commission on Higher Education (CHED). This is intended for:
                </p>

                <ul class="mid-text">
                    <li>High school graduates whose GWA is at least a passing grade and for graduating high school students whose GWA is at least a passing grade in the third year and in the first three grading periods of the fourth year and who will enroll in identified priority courses in duly authorized public or private HEIs.
                    </li><br>
                    <li>Students with earned units in college – whose weighted average is at least a passing grade for the last two (2) semesters and enrolled in identified priority courses in duly authorized public or private HEIs.
                    </li><br>
                    <li>Students who passed the Alternative Learning System (ALS) and the Philippine Educational Placement Test (PEPT).
                  </ul>

                <p>Documentary Requirements (to be scanned and uploaded when applying online). KUNG GUSTO NIYO ILAGAY TO GO. PAG AYAW EDI DON’T
                </p>

                <p>Important Reminder: All documents in photocopies must be CERTIFIED TRUE COPIES:
                </p>

                <ol class="mid-text" type="1">
                    <li>2 pcs. 2″x2″ ID picture
                    </li><br>
                    <li>Certified true copy of Birth Certificate
                    </li><br>
                    <li>Academic Credentials: <br>
                        <p>
                            * For Graduating Senior High School applicants– Grades for Grade 11 and 1st Sem. of Grade 12 <br>
                            * For Senior High School Graduates – Form 137 <br>
                            * For ALS Passers – Accreditation and Equivalency Test Passer Certificate <br>
                            * For PEPT Passers – Certificate of Advancing to tne Next Level 
                        </p>
                    </li>
                    <li>Parents’/Guardians’ Proof of Income (whichever is applicable)
                    </li>
                        <p>
                            * Latest Income Tax Return (ITR) of parents or guardian <br>
                            * Certificate of Tax Exemption from the Bureau of Internal Revenue (BIR) <br>
                            * Certificate of Indigency with Gross Annual Income of parent/guardian issued by the Barangay        Chairman or Department of Social Welfare and Development (DSWD) <br>
                            * Affidavit of No Income or Case Study from DSWD <br>
                            * For children of Overseas Filipino Workers (OFW) and Seafarers, a latest copy of contract or proof of income may be considered
                        </p>
                    <li>Supporting Documents
                    </li>
                        <p>
                            In addition to the core requirements, the following SUPPORTING DOCUMENTS will be further required for the following cases: <br><br>
                            * For solo parents and/or their dependents, submit authenticated photocopy of Solo Parent ID or Certification from Department of Social Welfare and Development <br>
                            * For applicants belonging to an Ethnic Group, submit Certificate from National Commission on Indigenous Peoples (NCIP) <br>
                            * For PWD applicants, submit Medical Certificate <br>
                            * For applicants living with a guardian, submit Affidavit of Guardianship
                        </p>
                  </ol> 

                <h3>What is the Worth of this Tulong Dunong Scholarship 2021?
                </h3>

                <p>The package of financial assistance to grantees shall be six (6) semesters for a three(3) year program, eight(8) semesters for a four(4) year program or ten(10) semesters for a five (5) year program.
                </p>

                <p>The financial benefits of TDP scholarship cover tuition and other school fees as billed not to exceed Php12,000.00 per academic year. Financial Assistance for other programs includes;
                </p>

                <ul class="mid-text">
                    <li>Full Merit Program – P15,000 per semester
                    </li><br>
                    <li>Half Merit Program – P7,500 per semester
                    </li><br>
                    <li>Study Now Pay Later Plan – P7,500 per semester
                    </li>
                  </ul>  
                
                <h3>What are the Documentary Requirements I need to prepare for TDP Scholarship?
                </h3>

                <p>Your school will notify you if you have been included in the list of potential grantees who qualified in the Nationwide TDP Assessment. <br><br>
                    If you are included as one of the potential TDP grantees, you will need to submit your Documentary Requirements to your school to validate your slot. This is needed to check and verify if you have met the qualifications and criteria set by the guidelines. <br><br>
                    Submit the following Documentary Requirements:
                    </p>

                    
                <ul class="mid-text">
                    <li>CERTIFICATE OF GRADES (OF THE IMMEDIATE PAST SEMESTER)
                    </li><br>
                    <li>REGISTRATION FORM/CARD (CURRENT SEMESTER)/CERTIFICATE OF ENROLLMENT
                    </li><br>
                    <li>PICTURE OF SCHOOL ID/ CERTIFICATE OF NO ID AND OTHER Government ID
                    </li>
                  </ul>  
                <br><br>
        </div>
    </div>

    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script src="/js/app.js"></script>
</body>
</html>