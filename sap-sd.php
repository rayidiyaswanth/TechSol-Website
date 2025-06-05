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
                <h1 class="breadcumb-title">SAP (SD/HANA) </h1>
                <ul class="breadcumb-menu">
                    <li class="bc_one"><a href="<?php echo $site_url; ?>">Home</a></li>
                    <li>SAP (SD/HANA) </li>
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
                                <h4 class="h4 mb-25">What is meant by SAP SD Training?</h4>
                                <p class="mb-30">
                                    Our SAP SD Training provides you with the best skills in sales and distribution through expert trainers. This Course provides you with hands-on skills on the SAP SD module that helps you manage product and inventory data for an organization.
                                </p>
                                <h4 class="h4 mb-25">
                                    Who is this Course for?
                                </h4>
                                <p class="mb-30">



                                    Anyone interested in learning and building a career with SAP SD skills can take up this online Course.
                                </p>


                                <h4 class="h4 mb-25">What are the benefits of SAP SD Certification Training? </h4>
                                <p>The SAP SD Certification makes you skilled in using the SAP SD application in real-time to manage various activities. It also separates you from your peer learners who are non-certified and helps you explore many job opportunities. </p>



                                <h4 class="h4 mb-25">
                                    Do we provide placement support to the learners of SAP SD?

                                </h4>

                                <ul>


                                    <li>Our expert instructor will ensure that you learn and understand all the SAP SD concepts from day one of the Course.</li>
                                    <li>We provide the best trainers to teach you all the concepts with clear explanations and professional content delivery.</li>
                                    <li>Further, our hands-on Training and real-time projects, along with practice exercises, will help you gain expertise in the SD module.</li>
                                    <li>Also, we assist you in building an updated resume with all the skills that build your confidence. Our resources and guidance will help you prepare for the interviews in this field.</li>
                                    <li>So, after gaining all these skills, you will be able to clear any job interview and get placed.</li>


                                </ul>


                                <h4 class="h4 mb-25">What skills will you learn in this Course?</h4>
                                <li>Basics of SAP SD module.</li>
                                <li>Enterprise structure and master data.</li>
                                <li>Item categories and Schedule line categories.</li>
                                <li>Sales document processing.</li>
                                <li>Data reporting and contract process.</li>
                                <li>The delivery process and determining the route.</li>
                                <li>Techniques and Types of Conditions.</li>
                                <li>Determination materials and configuring automatic credit control.</li>
                                <li>Billing types and documentation.</li>


                                <h4 class="h4 mb-25">
                                What job roles will be there after SAP SD Online Training?
                                </h4>
                                <li>SAP SD Consultant</li>
                                    <li>SAP SD Functional Consultant</li>
                                    <li>SAP SD Engineer</li>


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
                        <h4 class="h4 mb-25">SAP OVERVIEW</h4>
                        <div class="checklist">
                            <ul>
                                <li>Introduction to SAP ERP</li>
                                <li>Brief overview of SAP Architecture</li>
                                <li>System Landscape of SAP</li>
                                <li>Implementation Tools (Asap and Solution Manager)</li>
                                <li>Roles And Responsibilities of a Consultant</li>
                                <li>Types of Projects</li>
                                <li>Change Transport System</li>
                                <li>Introduction to Sales & Distribution module</li>
                                <li>Processes in Sales and Distribution</li>
                                <li>Sales Area, Sales Organization</li>
                                <li>Distribution Channel, Division</li>
                                <li>Sales Group, Sales Office</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Enterprise Structure</h4>
                        <div class="checklist">
                            <ul>
                                <li>Introduction to Enterprise Structure</li>
                                <li>General Sales and Distribution Structures</li>
                                <li>Definition and Assignment of Organizational elements</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Master Data in Sales and Distribution process</h4>
                        <div class="checklist">
                            <ul>
                                <li>Customer Master Data</li>
                                <li>General Data Section</li>
                                <li>Company Code Data Section</li>
                                <li>Sales Area Data Section</li>
                                <li>Account Groups & Number Ranges</li>
                                <li>Material Master Data</li>
                                <li>Customer Material Info Record</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Sales Documents</h4>
                        <div class="checklist">
                            <ul>
                                <li>Sales Document Header Category</li>
                                <li>Sales Document Item Category</li>
                                <li>Sales Document Schedule Line Category</li>
                                <li>Copy Controls</li>
                                <li>Sales Document to Sales Document</li>
                                <li>Sales Document to Delivery Document</li>
                                <li>Sales Document to Billing Document</li>
                                <li>Billing Document to Sales Document</li>
                                <li>Inquiry, Quotation</li>
                                <li>Standard Order</li>
                                <li>Cash Sales, Rush Order</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Customer Complaints</h4>
                        <div class="checklist">
                            <ul>
                                <li>Customer Returns</li>
                                <li>Debit Memo Request</li>
                                <li>Credit Memo Request</li>
                                <li>Free of charge Delivery</li>
                                <li>Subsequent Free of Charge Delivery</li>
                                <li>Invoice Correction Request</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Pricing</h4>
                        <div class="checklist">
                            <ul>
                                <li>Pricing Process</li>
                                <li>Condition Tables, Condition Types</li>
                                <li>Access Sequence</li>
                                <li>Pricing Procedure</li>
                                <li>Pricing Procedure Determination</li>
                                <li>Condition Record Maintenance</li>
                                <li>Condition Supplement</li>
                                <li>Item Conditions, Header Conditions</li>
                                <li>Discounts & Surcharges</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Basic Functions</h4>
                        <div class="checklist">
                            <ul>
                                <li>Free Goods Determination – Listing / Exclusion</li>
                                <li>Revenue Account Determination</li>
                                <li>Partner Determination</li>
                                <li>Output Determination</li>
                                <li>Material Determination</li>
                                <li>Material Listing / Exclusion</li>
                                <li>Credit Management</li>
                                <li>Route Determination</li>
                                <li>Incompletion Procedure</li>
                                <li>Transfer of Requirements (TOR)</li>
                                <li>Availability Check</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Shipping</h4>
                        <div class="checklist">
                            <ul>
                                <li>Delivery Document Header Category</li>
                                <li>Delivery Document Item Category</li>
                                <li>Number Ranges</li>
                                <li>Shipping Point Determination</li>
                                <li>Delivery Scheduling & Transportation Scheduling</li>
                                <li>Packing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Billing</h4>
                        <div class="checklist">
                            <ul>
                                <li>Billing document types</li>
                                <li>Pricing in billing documents</li>
                                <li>Copy control</li>
                                <li>Billing outputs</li>
                                <li>Rebate processing</li>
                                <li>Intercompany billing</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Customer Outline Agreements</h4>
                        <div class="checklist">
                            <ul>
                                <li>Scheduling Agreements</li>
                                <li>Contracts</li>
                                <li>Quantity Contracts</li>
                                <li>Service & Maintenance Contracts</li>
                                <li>Rental Contracts</li>
                                <li>Value Contracts, Master Contracts</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Cross-Functional Integration</h4>
                        <div class="checklist">
                            <ul>
                                <li>FICO Integration with SD Module:</li>
                                <li>Credit Management</li>
                                <li>Revenue Account Determination</li>
                                <li>Delivery</li>
                                <li>PGI (Post Goods Issue), Billing</li>
                                <li>MM Integration with SD Module</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Special Business Process</h4>
                        <div class="checklist">
                            <ul>
                                <li>Intercompany Sales</li>
                                <li>Third Party Order Processing</li>
                                <li>Individual Purchase Order</li>
                                <li>Consignment Sales processing</li>
                                <li>Cross Company Stock Transfers (STO)</li>
                                <li>Partner determination</li>
                                <li>Output determination</li>
                                <li>Text determination</li>
                                <li>Domestic Sales</li>
                                <li>Export Sales</li>
                                <li>Deemed export Sales</li>
                                <li>Depot Sales</li>
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