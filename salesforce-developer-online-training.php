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
                <h1 class="breadcumb-title">Salesforce Developer Online Training</h1>
                <ul class="breadcumb-menu">
                    <li class="bc_one"><a href="<?php echo $site_url; ?>">Home</a></li>
                    <li>Salesforce Developer Online Training</li>
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
                            <img src="./assets/img-iq/sap.jpg" alt="">

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
                                <h4 class="h4 mb-25">What is a Salesforce Developer?</h4>
                                <p class="mb-30">
                                    Salesforce Developer is one of the most demanding skills in Salesforce industries. A developer is a programmer who builds applications for business. Salesforce Developers are ones who used to write the code on the Salesforce platform using Apex, JavaScript, Aura, and Lightning Web Components.
                                </p>
                                <h4 class="h4 mb-25">
                                    Salesforce Developer Roles and Responsibilities
                                </h4>
                                <p class="mb-30">



                                    What does a Salesforce developer do? The Roles and Responsibilities of a Developer are to understand the platform’s out-of-the-box functionality and then customize the application based on client requirements using coding or configurations. These developers use tools such as Apex, Visualforce, Aura, and Lightning Component in order to develop apps.
                                </p>


                                <h4 class="h4 mb-25">Roles of a Salesforce Developer Jobs </h4>

                                <p>Here are list of responsibilities for the developer job description</p>




                                <ul>


                                    <li><strong>Business Requirement:</strong> The developer needs to support business requirements with out-of-the-box functionality.</li>
                                    <li><strong>Solution:</strong> Should be able to provide customized solutions using the Salesforce platform.</li>
                                    <li><strong>Analytical skills:</strong> Should handle requirement gatherings and produce functional analysis.</li>
                                    <li><strong>Communication:</strong> The developer should communicate well with project managers, clients, and architects to ensure efficient participation in the software development life cycle.</li>
                                    <li><strong>Troubleshooting:</strong> You should be able to troubleshoot any bugs in the system.</li>
                                    <li><strong>Time Management:</strong> Able to understand the Salesforce Agile implementation and should follow various timelines and development goals.</li>

                                </ul>


                                <h4 class="h4 mb-25">Salesforce Developer Responsibilities</h4>
                                <p>Here are some of the responsibilities in a developer job are as follows:</p>


                                <ul>
                                    <li><strong>Development:</strong> The Salesforce Developer is responsible for application development and helping the team.</li>
                                    <li><strong>Team Building:</strong> As a Senior developer, they are responsible for giving training to junior developers.</li>
                                    <li><strong>Maintenance:</strong> They are responsible for maintaining the already existing applications and upgrading the application.</li>
                                </ul>

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
                        <h4 class="h4 mb-25">Introduction to OOPs Concepts</h4>
                        <div class="checklist">
                            <ul>
                                <li>Object Oriented Programming Fundamentals</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">MVC Architecture</h4>
                        <div class="checklist">
                            <ul>
                                <li>Model</li>
                                <li>View</li>
                                <li>Controller</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Apex Programming Overview </h4>
                        <div class="checklist">
                            <ul>
                                <li>CSS Introduction</li>
                               
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">JavaScript Introduction</h4>
                        <div class="checklist">
                            <ul>
                   
                                <li>Internal</li>
                                <li>External</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Static Resources</h4>
                        <div class="checklist">
                            <ul>
                                <li>Adding External CSS files to the static resources</li>
                                <li>&lt;apex:stylesheet/&gt; tag usage</li>
                                <li>Adding External Javascript files to the static resources</li>
                                <li>&lt;apex:includescript/&gt; tag usage</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Apex Class Creation & Calling</h4>
                        <div class="checklist">
                            <ul>
                                <li>Defining Class</li>
                                <li>Access Specifiers</li>
                                <li>Method Declarations</li>
                                <li>Debugging results</li>
                                <li>Naming conventions & Code Commenting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Data Types</h4>
                        <div class="checklist">
                            <ul>
                                <li>Primitives</li>
                                <li>Collections (List, Set and Map)</li>
                                <li>subject</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Controllers</h4>
                        <div class="checklist" style="column-count: auto;">
                            <div class="row">

                                <div class="col-md-4">
                                    <h5>Standard Controller</h5>
                                    <ul>
                                        <li>Record setvar</li>
                                    </ul>
                                </div>


                                <div class="col-md-4">
                                    <h5>Custom Controller</h5>
                                    <ul>
                                        <li>SOQL Query – Query data with SOQL and place them on Pages</li>
                                        <li>Custom Save Functionality</li>
                                        <li>With Sharing class Vs. without Sharing Class</li>
                                        <li>User mode Execution Vs. System mode Execution</li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5>Extensions</h5>
                                    <ul>
                                        <li>Save - Standard controller with extension sample</li>
                                    </ul>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Wrapper Classes & View State</h4>
                        <div class="checklist" style="column-count: auto;">

                            <div class="row">


                                <div class="col-md-4">
                                    <li>Display multi object data</li>
                                </div>
                                <div class="col-md-4">
                                    <li>Adding check boxes to the data and perform related operations</li>
                                </div>
                                <div class="col-md-4">

                                    <h5>View State</h5>
                                    <li>Inner Queries & Relational Queries</li>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Triggers</h4>
                        <div class="checklist">
                            <ul>
                                <li>Trigger Events</li>
                                <li>Trigger Overview</li>
                                <li>Defining Triggers in Salesforce</li>
                                <li>Trigger Context variables</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Ajax Components</h4>
                        <div class="checklist">
                            <ul>
                                <li>Action Function</li>
                                <li>Action Support</li>
                                <li>Action Region</li>
                                <li>Action Pollar</li>
                                <li>Action Status</li>
                                <li>Rerender</li>
                                <li>Render</li>
                                <li>Facet</li>
                                <li>Outputpanel</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Packages</h4>
                        <div class="checklist">
                            <ul>
                                <li>Package Overview</li>
                                <li>Defining packages</li>
                                <li>Package Types - Managed & Unmanaged</li>
                                <li>Managed Vs Unmanaged Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Force.com Sites</h4>
                        <div class="checklist">
                            <ul>
                                <li>Building public websites for the external Users</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Batch Apex </h4>
                        <div class="checklist">
                            <ul>
                                <li>Batch apex Use and its Methods</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25"> Scheduling Apex</h4>
                        <div class="checklist">
                            <ul>

                                <li>Scheduling apex Use and its Methods</li>
                                <li>Limitations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Different Sandboxes</h4>
                        <div class="checklist">
                            <ul>
                                <li>Sandbox Vs. Production Environments</li>
                                <li>Change sets</li>
                                <li>Limitations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mb-5">
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
    </div>


    <?php include('./footer.php')  ?>
</body>


</html>