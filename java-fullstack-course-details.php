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
                <h1 class="breadcumb-title">JAVA Full Stack Course</h1>
                <ul class="breadcumb-menu">
                    <li class="bc_one"><a href="index.php">Home</a></li>
                    <li>JAVA Full Stack Course</li>
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
                        <h4 class="h4 mb-25">What is JAVA FULL STACK</h4>
                        <p class="mb-30">
                            A Java Full Stack Developer is a software engineer who works on both the client and server
                            sides of a software application. This type of developer works on the Full Stack of a
                            software application, which contains front-end development, back end development, database
                            development, server development, API development, and version control systems. As a result,
                            the title “Full Stack” Developer was coined.

                        </p>
                        <h4 class="h4 mb-25">Benefits of beginning an Full Stack Java Development career</h4>
                        <p class="mb-30">
                            If you’re a novice in this field, understanding the significance of a Full-stack Java
                            developer could be beneficial to you. In the meantime, let’s become acquainted with the
                            benefits of making a living in this field that attracts thousands of professionals each year
                            across the globe.<br>

                            One of the best advantages of studying fully-stack Java development and establishing your
                            career in the field is the exceptional salary. <br>
                            When you finish your IT’s Java Full stack course in Hyderabad, you will be ready with
                            everything that is needed for developing the end-to-end applications yourself. In this case,
                            you will be trained on how to create responsive and interactive user interfaces using
                            dynamic languages, build reliable back-end systems, and link all these up in a streamlined
                            manner. Having gone through this extensive training, you will become an indispensable part
                            of a very competitive job market.



                        </p>

               
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
                    <div class="event-details-wrap">
                        <h4 class="h4 mb-25">Core Java Programming </h4>
                        <div class="checklist">
                            <ul>
                                <li>Classes </li>
                                <li>Object Oriented Features </li>
                                <li>Java Features </li>
                                <li>Methods, Fields </li>
                                <li>Access Modifiers </li>
                                <li>Setters and Getter methods </li>
                                <li>JDK, JRE, JVM </li>
                                <li>Encapsulation </li>
                                <li>Overloading</li>
                                <li>Constructors </li>
                                <li>String basics </li>
                                <li>This keyword </li>
                                <li>Inheritance </li>
                                <li>Overriding </li>
                                <li>Types of Inheritance </li>
                                <li>Constructor of Inheritance </li>
                                <li>Super keyword </li>
                                <li>Dynamic Method Dispatch </li>
                                <li>Final modifier </li>
                                <li>Abstract modifier </li>
                                <li>Static modifier </li>
                                <li>Interfaces </li>
                                <li>Packages </li>
                                <li>Command line arguments </li>
                                <li>Wrapper classes </li>
                                <li>Nested classes and interfaces </li>
                                <li>Blocks in classes </li>
                                <li>Basics of JVM </li>
                                <li>Exception handling </li>
                                <li>IO </li>
                                <li>Multi-threading </li>
                                <li>Collections framework </li>
                                <li>Garbage collection </li>
                                <li>Features of Java 8,9,11,17</li>


                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Database </h4>
                        <div class="checklist">
                            <ul>
                                <li>MySQL </li>
                                <li>SQL </li>
                                <li>DDL, DML, DCL, TCL</li>
                                <li>Views </li>
                                <li>Joins</li>
                                <li>Subqueries </li>
                                <li>Aggregate Functions </li>
                                <li>PL/SQL </li>
                                <li>Cursors, Triggers, Functions, Procedures </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">UI development </h4>
                        <div class="checklist">
                            <ul>
                                <li>HTML</li>
                                <li>Tags, Static Page Creation</li>
                                <li>Doctype, Meta</li>
                                <li>URLs</li>
                                <li>Images</li>
                                <li>Tables</li>
                                <li>Input, Button, Form Fields</li>
                                <li>CSS</li>
                                <li>Style, Class Selectors</li>
                                <li>Font, Id Selectors, Text, Border, Padding, Positioning</li>
                                <li>HTML with CSS</li>
                                <li>JavaScript</li>
                                <li>Operators, Variables</li>
                                <li>Loops, Arrays, Functions</li>
                                <li>Manipulations</li>
                                <li>Forms, Images</li>
                                <li>Bootstrap</li>
                                <li>Grid¸ Responsive design, Layout</li>
                                <li>Tables, Lists, Forms</li>
                                <li>Groups, Images, Buttons, Navbar</li>
                                <li>Panels, Breadcrumbs, Jumbotron, Dropdowns, Tabs, Carousel</li>
                                <li>Angular</li>
                                <li>Unit testing using Jasmine and karma</li>
                                <li>Class Bindings</li>
                                <li>Style bindings</li>
                                <li>Event bindings</li>
                                <li>Components</li>
                                <li>Services</li>
                                <li>Component interaction</li>
                                <li>Routing</li>
                                <li>Observables</li>
                                <li>Input and output</li>
                                <li>Directives</li>
                                <li>Modules</li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25"> Java Web Development </h4>
                        <div class="checklist">
                            <ul>

                                <li>JDBC </li>
                                <li>Drivers </li>
                                <li>Types </li>
                                <li>Statements </li>
                                <li>Prepared statements </li>
                                <li>Servlet</li>
                                <li>Life Cycle </li>
                                <li>Session Management </li>
                                <li>Config, Context </li>
                                <li>Request, Response </li>
                                <li>JSP</li>
                                <li>Tags </li>
                                <li>Implicit Objects </li>
                                <li>JSP MVC </li>
                                <li>MVC Architecture </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

                        <h4 class="h4 mb-25">Spring boot Framework </h4>
                        <div class="checklist">
                            <ul>

                                <li>Spring vs Spring boot</li>
                                <li>CLI, STS, Annotations</li>
                                <li>DI, AOP, JPA, Hibernate, with MySQL</li>
                                <li>With REST</li>


                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">ORM - Hibernate, JPA</h4>
                        <div class="checklist">
                            <ul>
                                <li>Generator classes, Dialects, Log4j</li>
                                <li>Mappings</li>
                                <li>JPA vs Hibernate</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h3>MVC Architecture</h3>
                        <h4 class="h4 mb-25">REST Services</h4>
                        <div class="checklist">
                            <ul>
                                <li>Components, RS, WS</li>
                                <li>RESTful services with SB</li>
                                <li>SOAP vs REST</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Micro services Introduction</h4>
                        <div class="checklist">
                            <ul>
                                <li>Architecture</li>
                                <li>Discovery service</li>
                                <li>API gateway</li>
                                <li>Inter service communication (synchronous and asynchronous)</li>
                                <li>Config Server</li>
                                <li>Load balancing </li>
                                <li>Circuit braker</li>
                                <li>Security(JWD –Key cloak) </li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h3>Methodologies – Agile</h3>
                        <h4 class="h4 mb-25">Design Patterns </h4>
                        <div class="checklist">
                            <ul>
                                <li>Singleton</li>


                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

                        <h4 class="h4 mb-25">Software Testing</h4>
                        <div class="checklist">
                            <ul>
                                <li>Unit Testing</li>
                                <li>Regression</li>
                                <li>White-box</li>
                                <li>Component</li>


                            </ul>
                        </div>


                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">


                        <h4 class="h4 mb-25">Good to Know </h4>
                        <div class="checklist">
                            <ul>
                                <li>LOG4J</li>
                                <li>GitHub</li>
                                <li>Maven</li>
                                <li>Junit -Mockito</li>
                                <li>Eclipse</li>
                            </ul>
                        </div>

                    </div>
                </div>



                <div class="row mt-5">
                    
                <div class="title-area mb-md-0 ">
                          
                          <h2 class="sec-title mb-5">JAVA FULL STACK Course's <span>Key Highlights</span> </h2>
                      </div>
                 
                <div class="col-lg-6 ">



         
           
                        <div class="checklistt highlights">
                            <ul>
                                <li>100+ hours of learning</li>
                                <li>Real-time industry professionals curate the course.</li>
                                <li> Internships and live projects</li>
                                <li>A cutting-edge training facility</li>
                                <li>Dedicated staff of placement experts</li>
                                <li>Placement is guaranteed 100 percent Assistance</li>
                                <li>28+ Skills That Are Useful in the Workplace</li>
                                <li>Trainers with a minimum of 12 years of experience</li>
                                <li>Videos and back-up classes</li>
                                <li>Subject Matter Experts Deliver Guest Lectures</li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6">
                    <img src="https://img.freepik.com/free-photo/person-working-html-computer_23-2150038857.jpg?t=st=1744970229~exp=1744973829~hmac=39cab44e5dc76f5f583bb2b6ae6cd28941ca7fc5e9cb1e582f99873752d2b894&amp;w=1060" alt="" style="
    border-radius: 10px;
">
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

<span>Course Enrollment</span> </h2>
                   
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