<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <?php include('./header-link.php')  ?>

</head>

<body>
    <?php include('./header.php')  ?>


    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape" />
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">DevOps Online Training</h1>
                <ul class="breadcumb-menu">
                    <li class="bc_one"><a href="<?php echo $site_url; ?>">Home</a></li>
                    <li>DevOps Online Training</li>
                </ul>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Get in Touch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <form action="course-form.php" method="POST" class="contact-form">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control style-white" name="name" placeholder="First Name*">
                                    <i class="fal fa-user"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control style-white" name="email" placeholder="Your Email*">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="tel" class="form-control style-white" name="phone" placeholder="Mobile Number*">
                                    <i class="fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-md-6 d-none">
                                <div class="form-group">
                                    <select name="subject" class="single-select nice-select form-select style-white">
                                        <option value="" disabled="disabled" selected="selected" hidden="">
                                            Select Your Course*
                                        </option>
                                        <option value="AI &amp; Machine Learning">AI &amp; Machine Learning</option>
                                        <option value="Cloud Courses">Cloud Courses</option>
                                        <option value="Big Data Courses">
                                            Big Data Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Data Warehousing Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Oracle Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Other Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Microsoft Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            QA Testing Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Digital Marketing Courses
                                        </option>
                                        <option value="Data Warehousing Courses">
                                            Java Courses
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="3" class="form-control style-white" placeholder="Write Your Message*"></textarea>
                                    <i class="fal fa-pen"></i>
                                </div>
                            </div>


                            <div class="form-btn col-12 mt-10">
                                <button type="submit" class="th-btn">
                                    Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <!--<p class="form-messages mb-0 mt-3"></p>-->
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="breadcumb-wrapper bg" data-overlay="title" data-opacity="9"
        data-bg-src="assets/img/hero/hero_bg_1_1.jpg">

        <div class="breadcumb-shape"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape" />
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <!-- <div class="bread">
                    <h1 class="breadcumb-title">JAVA Full Stack Course </h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>JAVA Full Stack Course </li>
                    </ul>
                </div> -->
                <div class="bread-icon">
                    <div class="in"><i class="fa-solid fa-clock"></i> <span>100</span> Hours</div>
                    <div class="in"><i class="fa-solid fa-book"></i> <span>24/7</span> Digital Library Access</div>
                    <div class="in"><i class="fa-solid fa-user-group"></i> <span>2765</span> Total Learners</div>
                    <div class="in"><i class="fa-solid fa-tag"></i> <span>Lifetime</span> Access</div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bread-text">
                            <h6>Instructor-led Online Training</h6>
                            <li><i class="fa-solid fa-angles-right"></i> Interactive Live training</li>
                            <li><i class="fa-solid fa-angles-right"></i> Real Time, Certified, Expert Trainers</li>
                            <li><i class="fa-solid fa-angles-right"></i> Job oriented & Industry ready curriculum</li>
                            <li><i class="fa-solid fa-angles-right"></i> Free Course Access for 365 Days</li>
                            <li><i class="fa-solid fa-angles-right"></i> Fast-track / Regular / Weekend</li>
                            <div class="text-center mt-3">
                                <!-- <a href="./apply-for-course.php">Attend Live Demo</a> -->

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Attend Live Demo </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bread-text">
                            <h6>Recorded Video Online Training</h6>
                            <li><i class="fa-solid fa-angles-right"></i> Learn at your own convenience</li>
                            <li><i class="fa-solid fa-angles-right"></i> Certified & Industry Experts Trainers</li>
                            <li><i class="fa-solid fa-angles-right"></i> Email & Forum support for 365 days</li>
                            <li><i class="fa-solid fa-angles-right"></i> Priority Certification support </li>
                            <li><i class="fa-solid fa-angles-right"></i> Multi Instructor sessions </li>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bread-text">
                            <img src="./assets/img-iq/java11.jpg" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4 mt-lg-0 order-2 order-lg-1">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    AI & Machine Learning
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">
                                        <!-- <h6>Cloud Courses</h6> -->
                                        <li><a class="active" href="#">Generative AI Online Training</a></li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Cloud Courses
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">
                                        <!-- <h6>Cloud Courses</h6> -->
                                        <li><a class="active" href="#">AWS Online Training</a></li>
                                        <li><a href="#">DevOps Online Training</a></li>
                                        <li><a href="#">Salesforce Admin Online Training</a></li>
                                        <li><a href="#">Salesforce Developer Online Training</a></li>
                                        <li><a href="#">Google Cloud Online Training</a></li>
                                        <li><a href="#">Microsoft Azure Online Training</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Big Data Courses
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">
                                        <!-- <h6>Cloud Courses</h6> -->
                                        <li><a href="./course-details.php">Hadoop Online Training</a>
                                        </li>
                                        <li><a href="#">Hadoop Administration Online Training</a></li>
                                        <li><a href="#">Data Science Online Training</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Data Warehousing Courses
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">
                                        <!-- <h6>Cloud Courses</h6> -->
                                        <li><a href="./course-details.php">Informatica Online
                                                Training</a></li>
                                        <li><a href="#">Informatica MDM Online Training</a></li>
                                        <li><a href="#">OBIEE Online Training</a></li>
                                        <li><a href="#">Cognos Online Training</a></li>
                                        <li><a href="#">DataStage Online Training</a></li>
                                        <li><a href="#">Microstrategy Online Training</a></li>
                                        <li><a href="#">Microstrategy Administration Online Training</a>
                                        </li>
                                        <li><a href="#">Tableau Online Training</a></li>
                                        <li><a href="#">QlikView Online Training</a></li>
                                        <li><a href="#">Qlik Sense Online Training</a></li>
                                        <li><a href="#">MSBI Online Training</a></li>
                                        <li><a href="#">Teradata Online Training</a></li>
                                        <li><a href="#">Teradata Online Training</a></li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Oracle Courses
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">

                                        <li><a href="./course-details.php">Oracle SQL & PL SQL Online
                                                Training</a></li>
                                        <li>
                                            <a href="#">Oracle DBA Online Training</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    Other Courses
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">
                                        <li><a href="./course-details.php">Python Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">AngularJS Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Business Analyst Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">IBM MQ Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Robotic Process Automation (RPA) Online
                                                Training</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    Microsoft Courses
                                </button>
                            </div>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">

                                        <li><a href="./course-details.php">.Net Online Training</a></li>
                                        <li>
                                            <a href="#">ASP .Net Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">C# .Net Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">VB .Net Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">SQL Server DBA Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">SharePoint Online Training</a>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                    QA Testing Courses
                                </button>
                            </div>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">

                                        <li><a href="./course-details.php">Testing Tools Online
                                                Training</a></li>
                                        <li>
                                            <a href="#">LoadRunner Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Manual Testing Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">QTP Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Selenium Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">ETL Testing Online Training</a>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                    Digital Marketing Courses
                                </button>
                            </div>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">

                                        <li><a href="./course-details.php">WordPress Training</a></li>
                                        <li>
                                            <a href="#">Advanced Digital Marketing Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Search Engine Optimization Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Social Media Marketing Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Google AdWords Training</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                    Java Courses
                                </button>
                            </div>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="collapse-item-10"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="event-details-course">

                                        <li><a href="./course-details.php">Core Java Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">Advanced Java Online Training</a>
                                        </li>
                                        <li>
                                            <a href="#">J2EE Online Training</a>
                                        </li>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="event-details-wrap">

                        <!-- <h3 class="h3 mt-n2">JAVA Full Stack Course </h3> -->
                        <!-- <p class="mb-30">
    Since launching in 2006, Amazon Web Services has been providing world-leading cloud
    technologies that help any organization and any individual build solutions to transform
    industries, communities, and lives for the better.

</p> -->
                        <!-- <div class="event-img">
    <a href="./contact-us.php">
        <img src="./assets/img-iq/java11.jpg" alt="Event Image" />
    </a>
</div> -->

                        <div class="col-lg-12">
                            <div class="">
                                <h4 class="h4 mb-25">AWS DevOps Training Overview</h4>
                                <p class="mb-30">
                                    Master the AWS DevOps skills to advance your career by enrolling in the best AWS DevOps Training in Hyderabad offered by HKR Trainings. We have designed this program for individuals seeking knowledge of AWS with DevOps methodologies. This course covers the knowledge and skills to enhance the updating cloud ecosystem. Further, get trained by industry experts with AWS DevOps platform expertise and hands-on learning. So, start your career path to advance your profession with the AWS DevOps Course in Hyderabad.

                                </p>
                                <h4 class="h4 mb-25">AWS DevOps Training in Hyderabad Prerequisites</h4>
                                <p class="mb-30">



                                    To apply for the AWS DevOps Training in Hyderabad, you need to either:
                                </p>
                                <ul>
                                    <li>Basic skills in Linux/Unix systems.</li>
                                    <li>Should have good knowledge of scripting languages (Bash, Python, JavaScript).</li>
                                    <li>Initial skills in AWS services and cloud computing principles, including experience with 

                                  VCS (Git), can be an added benefit.  </li>

                                </ul>


                                <h4 class="h4 mb-25">AWS DevOps Training in Hyderabad Course Content</h4>
                                <p>The experts at HKR traininings delivered the top notch AWS devops training along with decent course structure that helps every individual to gain the concepts very easily. Now let's explore each and every module in depth.</p>

                            </div>

                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

                        <h4 class="h4 mb-25">INTRODUCTION TO DEVOPS (2Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is DevOps?</li>
                                <li>History of DevOps</li>
                                <li>Why DevOps?</li>
                                <li>What is Dev and Ops</li>
                                <li>DevOps definition</li>
                                <li>What is Build & Release?</li>
                                <li>Software Development Life Cycle (SDLC)</li>
                                <li>Pre-Requisites to get into DevOps</li>
                                <li>Future of DevOps</li>
                                <li>Tools in DevOps</li>
                                <li>DevOps main objectives</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Virtualization (2Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Introduction to virtual machines</li>
                                <li>Creating multiple VM's</li>
                                <li>Gest and host operating systems</li>
                                <li>Hypervisors</li>
                                <li>VM Ware</li>
                                <li>Virtual Box</li>
                                <li>Diff b/w containers and virtual machines</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">UNIX/LINUX (OS) (10Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is Operating System</li>
                                <li>Types of Operating systems</li>
                                <li>Introduction to Linux/Unix</li>
                                <li>Why Linux</li>
                                <li>Overview about client and server operating systems</li>
                                <li>Installation Red Hat Enterprise Linux</li>
                                <li>Filesystem Hierarchy</li>
                                <li>Terminal Overview</li>
                                <li>Basic Commands</li>
                                <li>VIM Editor</li>
                                <li>Files (hard & soft)</li>
                                <li>File Permissions</li>
                                <li>Package/Soft Management</li>
                                <li>Job Automation(crontab)</li>
                                <li>User and Group Administration</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">GIT (SCM/VCS) (7Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is SCM/VCS</li>
                                <li>Introduction to GIT??</li>
                                <li>Installing Git in Windows?</li>
                                <li>Installing Git in Linux?</li>
                                <li>Diff b/w Git and other tools</li>
                                <li>What is Distributed version control system</li>
                                <li>Architecture of git</li>
                                <li>Stages in git</li>
                                <li>Frequently used Terminologies</li>
                                <li>Git global configurations</li>
                                <li>Repo's</li>
                                <li>log Management</li>
                                <li>Git ignore concept</li>
                                <li>Branching</li>
                                <li>Merging vs rebase</li>
                                <li>Merge Conflicts</li>
                                <li>cherry-pick</li>
                                <li>snapshort</li>
                                <li>stash</li>
                                <li>Git Diff</li>
                                <li>Undo's from working, staging, and committing areas</li>
                                <li>HEAD</li>
                                <li>Tags</li>
                                <li>rewritting commit messages</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">GITHUB (ORS) (2Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is GitHub</li>
                                <li>Overview of GitHub</li>
                                <li>GitHub account creation</li>
                                <li>Difference between git & GitHub</li>
                                <li>Difference with other tools</li>
                                <li>create repo in local machine and push to GitHub</li>
                                <li>Clone existing repos from GitHub</li>
                                <li>Managing tags remotely</li>
                                <li>fetch and pull</li>
                                <li>Workflow</li>
                                <li>Forking Repos</li>
                                <li>pull request</li>
                                <li>Deleting and renaming GitHub Repos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">ANT/MAVEN (Build Tool) (5Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Over view of Maven</li>
                                <li>Diff b/w Maven and Ant</li>
                                <li>Diff b/w Maven and Other build tools</li>
                                <li>How to install Maven in Windows</li>
                                <li>How to install Maven in Linux</li>
                                <li>Maven Architecture</li>
                                <li>Maven Phases/Goals</li>
                                <li>Default Life Cycle</li>
                                <li>Standard Directory Layout</li>
                                <li>GAV</li>
                                <li>Maven local and remote repositories</li>
                                <li>Packages and their types</li>
                                <li>Sample Maven Project</li>
                                <li>One by one goals executions</li>
                                <li>Build in and custom plugins</li>
                                <li>POM File</li>
                                <li>Maven SNAPSHORT</li>
                                <li>Maven profiles</li>
                                <li>Maven dependency</li>
                                <li>How to Deploy Executable files in Application Servers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">JENKINS (CI/CD) (8Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is CI/CD</li>
                                <li>Introduction to Jenkins</li>
                                <li>History of Jenkins/Hudson</li>
                                <li>How to install Jenkins in Windows and Linux</li>
                                <li>How to create Jobs</li>
                                <li>Diff types of jobs</li>
                                <li>Integrating with GitHub</li>
                                <li>Integrating with Build tools</li>
                                <li>Build from GitHub Project</li>
                                <li>Managing Remote Systems with Jenkins</li>
                                <li>Parameterized Builds</li>
                                <li>Securing Jenkins</li>
                                <li>How to install plugins in Jenkins</li>
                                <li>Scheduling Builds</li>
                                <li>Setting up Different Types of Automated Builds</li>
                                <li>How to configure one job to another job</li>
                                <li>Configure Global Security Jenkins Administration</li>
                                <li>How to create maven type job</li>
                                <li>How to create ant type job</li>
                                <li>Jenkins pipeline</li>
                                <li>Jenkins Backup</li>
                                <li>How to deploy code in servers</li>
                                <li>Authentication and Authorization</li>
                                <li>How to create Nodes in diff Servers</li>
                                <li>Build pipeline view</li>
                                <li>Most useful 20 plugins</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">SONARQUBE (Code Quality Testing) (1Hr At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>What is SonarQube</li>
                                <li>How to Install SonarQube</li>
                                <li>Analyzing with SonarQube scanner for Maven</li>
                                <li>Integrate SonarQube with Maven</li>
                                <li>Integrate SonarQube with Jenkins</li>
                                <li>Generating final report in sonar dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">TOMCAT (Application Servers) (2Hr At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Introduction to Apache Tomcat server</li>
                                <li>How to install Tomcat in windows</li>
                                <li>How to install Tomcat in Linux</li>
                                <li>Manual Deployment</li>
                                <li>Continuous Deployment using Jenkins jobs</li>
                                <li>Deploying sample web application (sample. War)</li>
                                <li>Setup</li>
                                <li>Tomcat Integration With Jenkins</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">JFROG/NEXUS (Artifactory Storage) (3Hr At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Why Only Jfrog</li>
                                <li>Jfrog Artifactory?</li>
                                <li>What is Artifact</li>
                                <li>Source vs binary</li>
                                <li>what is artifact Repository?</li>
                                <li>why artifact Repository?</li>
                                <li>Type of packages it supports:</li>
                                <li>How to setup Artifactory server on AWS</li>
                                <li>Artifact Deployment from maven to Jfrog</li>
                                <li>Artifactory Integration with jenkins</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">ANSIBLE (Configuration Management) (7Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Introduction to CM</li>
                                <li>How to setup Ansible</li>
                                <li>Understanding Ansible architecture & Execution</li>
                                <li>Ansible documentation</li>
                                <li>Installing packages by using Ansible</li>
                                <li>Writing playbook</li>
                                <li>Workflow of Chef</li>
                                <li>Workflow of Ansible</li>
                                <li>What is diff b/w Ansible and Chef?</li>
                                <li>How to install Ansible in Linux and Windows</li>
                                <li>What is Work-station, Chef-Server, Nodes</li>
                                <li>Servers and Nodes concept</li>
                                <li>Chef Configuration Concepts</li>
                                <li>Workstation Setup</li>
                                <li>Creating Cookbooks and uploading into server</li>
                                <li>How to use Ruby in Chef</li>
                                <li>About Bootstrap</li>
                                <li>Package/service actions</li>
                                <li>Installing Multiple packages at one time</li>
                                <li>How to manage Chef-Servers</li>
                                <li>Create roles</li>
                                <li>Add Roles to organization</li>
                                <li>How to Add Run list to Node</li>
                                <li>Check node Details</li>
                                <li>How to create Data bags</li>
                                <li>Add Database to organization</li>
                                <li>Create a server and add to organization</li>
                                <li>Check node details using knife</li>
                                <li>Create organization</li>
                                <li>Environments</li>
                                <li>Add yourself and node to organization</li>
                                <li>Adding nodes to Chef-Server</li>
                                <li>Most useful Playbooks</li>
                                <li>What is Ansible & its feature</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Docker (7 Hrs At Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Learning the Basics of Docker</li>
                                <li>Introduction to Docker</li>
                                <li>Containers vs Virtual Machines</li>
                                <li>Docker Architecture</li>
                                <li>Docker Hub</li>
                                <li>Docker Installation</li>
                                <li>Creating Our First Image</li>
                                <li>Working with Multiple Images</li>
                                <li>Packaging a Customized Container</li>
                                <li>Running Container Commands with Docker</li>
                                <li>Managing and Removing Base Images</li>
                                <li>Pushing to Docker Hub</li>
                                <li>Creating Shared volume groups</li>
                                <li>Create own images</li>
                                <li>Docker Networking</li>
                                <li>Docker file for user</li>
                                <li>Volume management</li>
                                <li>Docker Link</li>
                                <li>Docker Comp</li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Kubernetes (7 Hrs at Best)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Why and what Kubernetes Installation</li>
                                <li>Kubernetes Objects</li>
                                <li>Kubernetes Architecture</li>
                                <li>Pods</li>
                                <li>Service</li>
                                <li>Volume</li>
                                <li>Namespace</li>
                                <li>Replica Set</li>
                                <li>Deployment</li>
                                <li>Stateful Set</li>
                                <li>Daemon set</li>
                                <li>Job</li>
                                <li>Create a Cluster using Kubeadm ,Minikube</li>
                                <li>Using kubectl to Create a Deployment</li>
                                <li>Using a Service to Expose Your App</li>
                                <li>Scale Your App</li>
                                <li>KUBEADM ON AWS</li>
                                <li>Using kubeadm to Create a Cluster</li>
                                <li>Pod deletes</li>
                            </ul>
                        </div>
                    </div>
                </div>









                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">AWS (Cloud)</h4>
                        <div class="checklist">
                            <ul>
                                <li>Traditional Infrastructure Scaling</li>
                                <li>Cloud Computing</li>
                                <li>Cloud Computing Providers(Vendors)</li>
                                <li>Cloud Service Models</li>
                                <li>Introduction to AWS</li>
                                <li>Why AWS</li>
                                <li>AWS Global infra</li>
                                <li>Free Tier account creation</li>
                                <li>Putty</li>
                                <li>MobaExterm</li>
                                <li>Multi-factor authentication (MFA)</li>
                                <li>EC2 EBS</li>
                                <li>VPC</li>
                                <li>ELB</li>
                                <li>Auto scaling Group</li>
                                <li>IAM</li>
                                <li>AMI</li>
                                <li>Snapshots</li>
                                <li>Elastic Ip</li>
                                <li>S3</li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Providing’s</h4>
                        <div class="checklist">
                            <ul>
                                <li>Materials for every tool</li>
                                <li>Job Support</li>
                                <li>Interview Question</li>
                                <li>Real-Time Scenarios</li>
                                <li>End to End Business -flow</li>
                                <li>Real-Time Projects</li>


                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-wrap course_bottom_form bg" data-bg-src="assets/img/bg/contact_bg_1.png">
                        <!-- <span class="sub-title">Contact With Us!</span> -->
                        <h2 class="border-title">Begin Your

                            <span>Course Enrollment</span>
                        </h2>

                        <form action="#" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name"
                                            placeholder="Your Name*" />
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email"
                                            placeholder="Email Address*" />
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="number" id="number"
                                            placeholder="Phone Number*" />
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="number" id="number"
                                            placeholder="Subject*" />
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="2"
                                            class="form-control style-white"
                                            placeholder="Write Your Message*"></textarea>
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn">
                                        Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('./footer.php')  ?>
</body>


</html>