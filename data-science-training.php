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
                <h1 class="breadcumb-title">Data Science Training </h1>
                <ul class="breadcumb-menu">
                    <li class="bc_one"><a href="index.php">Home</a></li>
                    <li>Data Science Training </li>
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
                        <h4 class="h4 mb-25">What Is Data Science and Introduction? </h4>
                        <h5>The Problem</h5>
                        <p class="mb-30">
                        Data scientist is one of the best suited professions to thrive this century. It is digital, programming-oriented, and analytical. Therefore, it comes as no surprise that the demand for data scientists has been surging in the job marketplace.     

                        </p>
                        <p>However, supply has been very limited. It is difficult to acquire the skills necessary to be hired as a data scientist.    </p>
                        <h4 class="h4 mb-25">And how can you do that?  </h4>
                        <p class="mb-30">
                        Universities have been slow at creating specialized data science programs. (not to mention that the ones that exist are very expensive and time consuming)   
 </p>
                        <p class="mb-30">
                        Most online courses focus on a specific topic and it is difficult to understand how the skill they teach fit in the complete picture    
 </p>

               
                    </div>

                </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sylla-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-details-wrap">
                        <h4 class="h4 mb-25">The Solution   </h4>
                        <p>Data science is a multidisciplinary field. It encompasses a wide range of topics.   </p>
                        <div class="checklist">
                        <ul>
  <li>Understanding of the data science field and the type of analysis carried out</li>
  <li>Mathematics</li>
  <li>Statistics</li>
  <li>Python</li>
  <li>Applying advanced statistical techniques in Python</li>
  <li>Data Visualization</li>
  <li>Machine Learning</li>
  <li>Deep Learning</li>
</ul>


                        </div>
                        <p class="mt-2">Each of these topics builds on the previous ones. And you risk getting lost along the way if you don’t acquire these skills in the right order. For example, one would struggle in the application of Machine Learning techniques before understanding the underlying Mathematics. Or, it can be overwhelming to study regression analysis in Python before knowing what a regression is.    </p>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="event-details-wrap">
                        <h4 class="h4 mb-25">Introduction to Data Science</h4>
                        <div class="checklist">
                        <ul>
  <li>Need for Data Scientists</li>
  <li>Foundation of Data Science</li>
  <li>What is Business Intelligence</li>
  <li>What is Data Analysis, Data Mining, and Machine Learning</li>
  <li>Analytics vs Data Science</li>
  <li>Value Chain</li>
  <li>Types of Analytics</li>
  <li>Lifecycle Probability</li>
  <li>Analytics Project Lifecycle</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Data </h4>
                        <div class="checklist">
                        <ul>
  <li>Basis of Data Categorization</li>
  <li>Types of Data</li>
  <li>Data Collection Types</li>
  <li>Forms of Data and Sources</li>
  <li>Data Quality, Changes and Data Quality Issues, Quality Story</li>
  <li>What is Data Architecture</li>
  <li>Components of Data Architecture</li>
  <li>OLTP vs OLAP</li>
  <li>How is Data Stored?</li>
</ul>

                        </div>

                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Big Data </h4>
                        <div class="checklist">
                        <ul>
  <li>What is Big Data?</li>
  <li>5 Vs of Big Data</li>
  <li>Big Data Architecture, Technologies, Challenge and Big Data Requirements</li>
  <li>Big Data Distributed Computing and Complexity</li>
  <li>Hadoop</li>
  <li>Map Reduce Framework</li>
  <li>Hadoop Ecosystem</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25"> Data Science Deep Dive </h4>
                        <div class="checklist">
                        <ul>
  <li>What is Data Science?</li>
  <li>Why are Data Scientists in demand?</li>
  <li>What is a Data Product</li>
  <li>The growing need for Data Science</li>
  <li>Large-Scale Analysis Cost vs Storage</li>
  <li>Data Science Skills</li>
  <li>Data Science Use Cases and Data Science Project Life Cycle &amp; Stages</li>
  <li>Map-Reduce Framework</li>
  <li>Hadoop Ecosystem</li>
  <li>Data Acquisition</li>
  <li>Where to source data</li>
  <li>Techniques</li>
  <li>Evaluating input data</li>
  <li>Data formats, Quantity and Data Quality</li>
  <li>Resolution Techniques</li>
  <li>Data Transformation</li>
  <li>File Format Conversions</li>
  <li>Anonymization</li>
</ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

                        <h4 class="h4 mb-25">Intro to R Programming</h4>
                        <div class="checklist">
                        <ul>
  <li>Introduction to R</li>
  <li>Business Analytics</li>
  <li>Analytics concepts</li>
  <li>The importance of R in analytics</li>
  <li>R Language community and eco-system</li>
  <li>Usage of R in industry</li>
  <li>Installing R and other packages</li>
  <li>Perform basic R operations using command line</li>
  <li>Usage of IDE R Studio and various GUI</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">R Programming Concepts</h4>
                        <div class="checklist">
                        <ul>
  <li>The datatypes in R and its uses</li>
  <li>Built-in functions in R</li>
  <li>Subsetting methods</li>
  <li>Summarize data using functions</li>
  <li>Use of functions like head(), tail(), for inspecting data</li>
  <li>Use-cases for problem solving using R</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4>Data Manipulation in R</h4>
                      
                        <div class="checklist">
                        <ul>
  <li>Various phases of Data Cleaning</li>
  <li>Functions used in Inspection</li>
  <li>Data Cleaning Techniques</li>
  <li>Uses of functions involved</li>
  <li>Use-cases for Data Cleaning using R</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4 class="h4 mb-25">Data Import Techniques in R</h4>
                        <div class="checklist">
                        <ul>
  <li>Import data from spreadsheets and text files into R</li>
  <li>Importing data from statistical formats</li>
  <li>Packages installation for database import</li>
  <li>Connecting to RDBMS from R using ODBC and basic SQL queries in R</li>
  <li>Web Scraping</li>
  <li>Other concepts on Data Import Techniques</li>
</ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">
                        <h4>Exploratory Data Analysis (EDA) using R</h4>
                       
                        <div class="checklist">
                        <ul>
    <li>What is EDA?</li>
    <li>Why do we need EDA?</li>
    <li>Goals of EDA</li>
    <li>Types of EDA</li>
    <li>Implementing of EDA</li>
    <li>Boxplots, cor() in R</li>
    <li>EDA functions</li>
    <li>Multiple packages in R for data analysis</li>
    <li>Some fancy plots</li>
    <li>Use-cases for EDA using R</li>
  </ul>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

                        <h4 class="h4 mb-25">Data Visualization in R</h4>
                        <div class="checklist">
                        <ul>
    <li>Storytelling with Data</li>
    <li>Principle tenets</li>
    <li>Elements of Data Visualization</li>
    <li>Infographics vs Data Visualization</li>
    <li>Data Visualization & Graphical functions in R</li>
    <li>Plotting Graphs</li>
    <li>Customizing Graphical Parameters to improvise the plots</li>
    <li>Various GUIs</li>
    <li>Spatial Analysis</li>
    <li>Other Visualization concepts</li>
  </ul>
                        </div>


                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="event-details-wrap mt-4">

<h4>HADOOP</h4>
                        <h4 class="h4 mb-25">Big Data and Hadoop Introduction</h4>
                        <div class="checklist">
                        <ul>
    <li>What is Big Data and Hadoop?</li>
    <li>Challenges of Big Data</li>
    <li>Traditional approach Vs Hadoop</li>
    <li>Hadoop Architecture</li>
    <li>Distributed Model</li>
    <li>Block structure File System</li>
    <li>Technologies supporting Big Data</li>
    <li>Replication</li>
    <li>Fault Tolerance</li>
    <li>Why Hadoop?</li>
    <li>Hadoop Eco-System</li>
    <li>Use cases of Hadoop</li>
    <li>Fundamental Design Principles of Hadoop</li>
    <li>Comparison of Hadoop Vs RDBMS</li>
  </ul>
                        </div>

                    </div>
                </div>



                <div class="row mt-5">
                    
                <div class="title-area mb-md-0 ">
                <div class="col-lg-12">
                <div class="event-details-wrap mt-4">
                          <h4 class="sec-title mb-25">Understand Hadoop Cluster <span> Architecture</span> </h4>
                          <div class="checklist">
                          <ul>
    <li>Hadoop Cluster and Architecture</li>
    <li>5 Daemons</li>
    <li>Hands-On Exercise</li>
    <li>Typical Workflow</li>
    <li>Hands-On Exercise</li>
    <li>Writing Files to HDFS</li>
    <li>Hands-On Exercise</li>
    <li>Reading Files from HDFS</li>
    <li>Hands-On Exercise</li>
    <li>Rack Awareness</li>
    <li>Before Map Reduce</li>
  </ul>
                          </div>
                </div>
                </div>
                      </div>
                <div class="title-area mb-md-0 ">
                <div class="col-lg-12">
                <div class="event-details-wrap mt-4">
                          <h4 class="sec-title mb-25">Map Reduce Concepts </h4>
                          <div class="checklist">
                          <ul>
    <li>Map Reduce Concepts</li>
    <li>What is Map Reduce?</li>
    <li>Why Map Reduce?</li>
    <li>Map Reduce in real world and Map Reduce Flow</li>
    <li>What is Mapper, Reducer, and Shuffling?</li>
    <li>Word Count Problem</li>
    <li>Hands-On Exercise</li>
    <li>Distributed Word Count Flow and Solution</li>
    <li>Log Processing and Map Reduce</li>
    <li>Hands-On Exercise</li>
  </ul>
                          </div></div></div>
                      </div>
                <div class="title-area mb-md-0 ">
                <div class="col-lg-12">
                <div class="event-details-wrap mt-4">
                          <h4 class="sec-title mb-25">Advanced Map Reduce Concepts </h4>
                          <div class="checklist">
                          <ul>
    <li>What is Combiner?</li>
    <li>Hands-On Exercise</li>
    <li>What is Partitioner?</li>
    <li>Hands-On Exercise</li>
    <li>What is Counter?</li>
    <li>Hands-On Exercise</li>
    <li>InputFormats/Output Formats</li>
    <li>Hands-On Exercise</li>
    <li>Map Join using MR</li>
    <li>Hands-On Exercise</li>
    <li>Reduce Join using MR</li>
    <li>Hands-On Exercise</li>
    <li>MR Distributed Cache</li>
    <li>Hands-On Exercise</li>
    <li>Using sequence files & images with MR</li>
    <li>Hands-On Exercise</li>
    <li>Planning for Cluster & Hadoop 2.0 Yarn</li>
    <li>Configuration of Hadoop</li>
    <li>Choosing Right Hadoop Hardware and Software?</li>
    <li>Hadoop Log Files?</li>
  </ul>
                          </div></div></div>
                      </div>

                      <div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Hadoop 2.0 and YARN</h4>
      <div class="checklist">
        <ul>
          <li>Hadoop 1.0 Challenges</li>
          <li>NN Scalability, SPOF, and HA</li>
          <li>Job Tracker Challenges</li>
          <li>Hadoop 2.0 New Features</li>
          <li>Hadoop 2.0 Cluster Architecture & Federation</li>
          <li>Hadoop 2.0 HA</li>
          <li>Yarn & Hadoop Ecosystem</li>
          <li>Yarn MR Application Flow</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">PIG</h4>
      <div class="checklist">
        <ul>
          <li>Introduction to Pig</li>
          <li>What Is Pig?</li>
          <li>Pig’s Features & Pig Use Cases</li>
          <li>Interacting with Pig</li>
          <li>Basic Data Analysis with Pig</li>
          <li>Hands-On Exercise</li>
          <li>Pig Latin Syntax</li>
          <li>Loading Data</li>
          <li>Hands-On Exercise</li>
          <li>Simple Data Types</li>
          <li>Field Definitions</li>
          <li>Data Output</li>
          <li>Viewing the Schema</li>
          <li>Hands-On Exercise</li>
          <li>Filtering and Sorting Data</li>
          <li>Hands-On Exercise</li>
          <li>Commonly-Used Functions</li>
          <li>Hands-On Exercise: Pig for ETL Processing</li>
          <li>Processing Complex Data with Pig</li>
          <li>Hands-On Exercise</li>
          <li>Storage Formats</li>
          <li>Complex/Nested Data Types</li>
          <li>Hands-On Exercise</li>
          <li>Grouping</li>
          <li>Hands-On Exercise</li>
          <li>Built-in Functions for Complex Data</li>
          <li>Hands-On Exercise</li>
          <li>Iterating Grouped Data</li>
          <li>Hands-On Exercises</li>
          <li>Multi-Dataset Operations with Pig</li>
          <li>Hands-On Exercise</li>
          <li>Techniques for Combining Data Sets</li>
          <li>Joining Data Sets in Pig</li>
          <li>Hands-On Exercise</li>
          <li>Splitting Data Sets</li>
          <li>Hands-On Exercise</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">HIVE</h4>
      <div class="checklist">
        <ul>
          <li>Hive Fundamentals and Architecture</li>
          <li>Loading and Querying Data in Hive</li>
          <li>Hands-On Exercise</li>
          <li>Hive Architecture and Installation</li>
          <li>Comparison with Traditional Database</li>
          <li>HiveQL: Data Types, Operators and Functions</li>
          <li>Hands-On Exercise</li>
          <li>Hive Tables, Managed Tables and External Tables</li>
          <li>Hands-On Exercise</li>
          <li>Partitions and Buckets</li>
          <li>Hands-On Exercise</li>
          <li>Storage Formats, Importing Data, Altering Tables, Dropping Tables</li>
          <li>Hands-On Exercise</li>
          <li>Querying Data, Sorting and Aggregating, Map Reduce Scripts</li>
          <li>Hands-On Exercise</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Module-9</h4>
      <div class="checklist">
        <ul>
          <li>Joins & Sub queries, Views</li>
          <li>Hands-On Exercise</li>
          <li>Integration, Data manipulation with Hive</li>
          <li>Hands-On Exercise</li>
          <li>User Defined Functions</li>
          <li>Hands-On Exercise</li>
          <li>Appending Data into existing Hive Table</li>
          <li>Hands-On Exercise</li>
          <li>Static partitioning vs dynamic partitioning</li>
          <li>Hands-On Exercise</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">HBASE</h4>
      <div class="checklist">
        <ul>
          <li>CAP Theorem</li>
          <li>HBase Architecture and concepts</li>
          <li>Introduction to HBase</li>
          <li>Client API’s and their features</li>
          <li>HBase tables and The ZooKeeper Service</li>
          <li>Data Model, Operations</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Module-11</h4>
      <div class="checklist">
        <ul>
          <li>Programming and Hands on Exercises</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">SQOOP</h4>
      <div class="checklist">
        <ul>
          <li>Introduction to Sqoop</li>
          <li>MySQL Client & server</li>
          <li>Connecting to relational database using Sqoop</li>
          <li>Importing data using Sqoop from MySQL</li>
          <li>Exporting data using Sqoop to MySQL</li>
          <li>Incremental append</li>
          <li>Importing data using Sqoop from MySQL to Hive</li>
          <li>Exporting data using Sqoop to MySQL from Hive</li>
          <li>Importing data using Sqoop from MySQL to HBase</li>
          <li>Using queries and Sqoop</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Flume and Oozie</h4>
      <div class="checklist">
        <ul>
          <li>What is Flume?</li>
          <li>Why use Flume, Architecture, configurations</li>
          <li>Master, collector, Agent</li>
          <li>Twitter Data Sentimental Analysis project</li>
          <li>Oozie</li>
          <li>What is Oozie, Architecture, configurations?</li>
          <li>Oozie Job Submission</li>
          <li>Oozie properties</li>
          <li>Hands-on exercises</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Projects</h4>
      <div class="checklist">
        <ul>
          <li>Social Media Final Project</li>
          <li>Hadoop Project</li>
          <ul>
            <li>Objective</li>
            <li>Problem Definition</li>
            <li>Solution</li>
            <li>Discuss datasets and specifications of the project</li>
          </ul>
          <li>Project in Healthcare Domain</li>
          <ul>
            <li>Hadoop Project in Healthcare</li>
            <li>Objective</li>
            <li>Problem Definition</li>
            <li>Solution</li>
            <li>Discuss datasets and specifications of the project</li>
          </ul>
          <li>Project in Finance/Banking Domain</li>
          <ul>
            <li>Hadoop Project in Banking Domain</li>
            <li>Objective</li>
            <li>Problem Definition</li>
            <li>Solution</li>
            <li>Discuss datasets and specifications of the project</li>
          </ul>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Spark</h4>
      <h5>Apache Spark</h5>
      <div class="checklist">
        <ul>
          <li>Introduction to Apache Spark</li>
          <li>Why Spark</li>
          <li>Batch Vs. Real-Time Big Data Analytics</li>
          <li>Batch Analytics – Hadoop Ecosystem Overview</li>
          <li>Real-Time Analytics Options</li>
          <li>Streaming Data – Storm</li>
          <li>In Memory Data – Spark, What is Spark?</li>
          <li>Spark benefits to Professionals</li>
          <li>Limitations of MR in Hadoop</li>
          <li>Components of Spark</li>
          <li>Spark Execution Architecture</li>
          <li>Benefits of Apache Spark</li>
          <li>Hadoop vs Spark</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Introduction to Scala</h4>
      <div class="checklist">
        <ul>
          <li>Features of Scala</li>
          <li>Basic Data Types of Scala</li>
          <li>Val vs Var</li>
          <li>Type Inference</li>
          <li>REPL</li>
          <li>Objects & Classes in Scala</li>
          <li>Functions as Objects in Scala</li>
          <li>Anonymous Functions in Scala</li>
          <li>Higher Order Functions</li>
          <li>Lists in Scala</li>
          <li>Maps</li>
          <li>Pattern Matching</li>
          <li>Traits in Scala</li>
          <li>Collections in Scala</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Spark Core Architecture</h4>
      <div class="checklist">
        <ul>
          <li>Spark & Distributed Systems</li>
          <li>Spark for Scalable Systems</li>
          <li>Spark Execution Context</li>
          <li>What is RDD</li>
          <li>RDD Deep Dive and Dependencies</li>
          <li>RDD Lineage</li>
          <li>Spark Application In Depth and Spark Deployment</li>
          <li>Parallelism in Spark</li>
          <li>Caching in Spark</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Spark Internals</h4>
      <div class="checklist">
        <ul>
          <li>Spark Transformations, Actions, Cluster and SQL Introduction</li>
          <li>Spark Data Frames</li>
          <li>Spark SQL with CSV, JSON, and Database</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Spark Streaming</h4>
      <div class="checklist">
        <ul>
          <li>Features of Spark Streaming</li>
          <li>Micro Batch</li>
          <li>Dstreams</li>
          <li>Transformations on Dstreams</li>
          <li>Spark Streaming Use Case</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Statistics + Machine Learning</h4>
      <h4>Statistics</h4>
      <h5>What is Statistics?</h5>
      <div class="checklist">
      <ul>
  <li>Descriptive Statistics</li>
  <li>Central Tendency Measures</li>
  <li>The Story of Average</li>
  <li>Dispersion Measures</li>
  <li>Data Distributions</li>
  <li>Central Limit Theorem</li>
  <li>What is Sampling</li>
  <li>Why Sampling</li>
  <li>Sampling Methods</li>
  <li>Inferential Statistics</li>
  <li>What is Hypothesis testing</li>
  <li>Confidence Level</li>
  <li>Degrees of freedom</li>
  <li>What is pValue</li>
  <li>Chi-Square test</li>
  <li>What is ANOVA</li>
  <li>Correlation vs Regression</li>
  <li>Uses of Correlation and Regression</li>
</ul>

      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Machine Learning</h4>
      <h5>Machine Learning Introduction</h5>
      <h5>What is Statistics?</h5>
      <div class="checklist">
      <ul>
  <li>ML Fundamentals</li>
  <li>ML Common Use Cases</li>
  <li>Understanding Supervised and Unsupervised Learning Techniques</li>
  <li>Clustering</li>
  <li>Similarity Metrics</li>
  <li>Distance Measure Types: Euclidean, Cosine Measures</li>
  <li>Creating predictive models</li>
  <li>Understanding K-Means Clustering</li>
  <li>Understanding TF-IDF, Cosine Similarity and their application to Vector Space Model</li>
  <li>Case study</li>
  <li>Implementing Association rule mining</li>
  <li>Case study</li>
  <li>Understanding Process flow of Supervised Learning Techniques</li>
  <li>Decision Tree Classifier</li>
  <li>How to build Decision trees</li>
  <li>Case study</li>
  <li>Random Forest Classifier</li>
  <li>What is Random Forests</li>
  <li>Features of Random Forest</li>
  <li>Out of Box Error Estimate and Variable Importance</li>
  <li>Case study</li>
  <li>Naive Bayes Classifier</li>
  <li>Case study</li>
  <li>Project Discussion</li>
  <li>Problem Statement and Analysis</li>
  <li>Various approaches to solving a Data Science Problem</li>
  <li>Pros and Cons of different approaches and algorithms</li>
  <li>Linear Regression</li>
  <li>Case study</li>
  <li>Logistic Regression</li>
  <li>Case study</li>
  <li>Text Mining</li>
  <li>Case study</li>
  <li>Sentimental Analysis</li>
  <li>Case study</li>
</ul>


      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Python</h4>
      <h5>Getting Started with Python</h5>
      
      <div class="checklist">
      <ul>
  <li>Python Overview</li>
  <li>About Interpreted Languages</li>
  <li>Advantages/Disadvantages of Python pydoc</li>
  <li>Starting Python</li>
  <li>Interpreter PATH</li>
  <li>Using the Interpreter</li>
  <li>Running a Python Script</li>
  <li>Python Scripts on UNIX/Windows, Editors and IDEs</li>
  <li>Using Variables</li>
  <li>Keywords</li>
  <li>Built-in Functions</li>
  <li>Strings Different Literals</li>
  <li>Math Operators and Expressions</li>
  <li>Writing to the Screen</li>
  <li>String Formatting</li>
  <li>Command Line Parameters and Flow Control</li>
</ul>



      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Sequences and File Operations</h4>
    
      
      <div class="checklist">
      <ul>
  <li>Lists</li>
  <li>Tuples</li>
  <li>Indexing and Slicing</li>
  <li>Iterating through a Sequence</li>
  <li>Functions for all Sequences</li>
  <li>Using Enumerate()</li>
  <li>Operators and Keywords for Sequences</li>
  <li>The xrange() function</li>
  <li>List Comprehensions</li>
  <li>Generator Expressions</li>
  <li>Dictionaries and Sets</li>
</ul>




      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Deep Dive – Functions Sorting Errors and Exception Handling</h4>
    
      
      <div class="checklist">
      <ul>
  <li>Functions</li>
  <li>Function Parameters</li>
  <li>Global Variables</li>
  <li>Variable Scope and Returning Values</li>
  <li>Sorting</li>
  <li>Alternate Keys</li>
  <li>Lambda Functions</li>
  <li>Sorting Collections of Collections, Dictionaries, and Lists in Place</li>
  <li>Errors and Exception Handling</li>
  <li>Handling Multiple Exceptions</li>
  <li>The Standard Exception Hierarchy</li>
  <li>Using Modules</li>
  <li>The Import Statement</li>
  <li>Module Search Path</li>
  <li>Package Installation Ways</li>
</ul>





      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Regular Expressionist’s Packages and Object – Oriented Programming in Python</h4>
      <div class="checklist">
        <ul>
          <li>The Sys Module</li>
          <li>Interpreter Information</li>
          <li>STDIO</li>
          <li>Launching External Programs</li>
          <li>Path directories and Filenames</li>
          <li>Walking Directory Trees</li>
          <li>Math Function</li>
          <li>Random Numbers</li>
          <li>Dates and Times</li>
          <li>Zipped Archives</li>
          <li>Introduction to Python Classes</li>
          <li>Defining Classes</li>
          <li>Initializers</li>
          <li>Instance Methods</li>
          <li>Properties</li>
          <li>Class Methods and Data Static Methods</li>
          <li>Private Methods and Inheritance</li>
          <li>Module Aliases and Regular Expressions</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Debugging, Databases and Project Skeletons</h4>
      <div class="checklist">
        <ul>
          <li>Debugging</li>
          <li>Dealing with Errors</li>
          <li>Using Unit Tests</li>
          <li>Project Skeleton</li>
          <li>Required Packages</li>
          <li>Creating the Skeleton</li>
          <li>Project Directory</li>
          <li>Final Directory Structure</li>
          <li>Testing your Setup</li>
          <li>Using the Skeleton</li>
          <li>Creating a Database with SQLite 3</li>
          <li>CRUD Operations</li>
          <li>Creating a Database Object</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Machine Learning Using Python</h4>
      <div class="checklist">
        <ul>
          <li>Introduction to Machine Learning</li>
          <li>Areas of Implementation of Machine Learning</li>
          <li>Why Python</li>
          <li>Major Classes of Learning Algorithms</li>
          <li>Supervised vs Unsupervised Learning</li>
          <li>Learning NumPy</li>
          <li>Learning Scipy</li>
          <li>Basic plotting using Matplotlib</li>
          <li>Machine Learning application</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Supervised and Unsupervised Learning</h4>
      <div class="checklist">
        <ul>
          <li>Classification Problem</li>
          <li>Classifying with k-Nearest Neighbours (kNN) Algorithm</li>
          <li>General Approach to kNN</li>
          <li>Building the Classifier from Scratch</li>
          <li>Testing the Classifier</li>
          <li>Measuring the Performance of the Classifier</li>
          <li>Clustering Problem</li>
          <li>What is K-Means Clustering</li>
          <li>Clustering with k-Means in Python and an Application Example</li>
          <li>Introduction to Pandas</li>
          <li>Creating Data Frames</li>
          <li>Grouping/Sorting</li>
          <li>Plotting Data</li>
          <li>Creating Functions</li>
          <li>Converting Different Formats</li>
          <li>Combining Data from Various Formats</li>
          <li>Slicing/Dicing Operations</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Scikit and Introduction to Hadoop</h4>
      <div class="checklist">
        <ul>
          <li>Introduction to Scikit-Learn</li>
          <li>Inbuilt Algorithms for Use</li>
          <li>What is Hadoop and why it is popular</li>
          <li>Distributed Computation and Functional Programming</li>
          <li>Understanding MapReduce Framework Sample MapReduce Job Run</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Hadoop and Python</h4>
      <div class="checklist">
        <ul>
          <li>PIG and HIVE Basics</li>
          <li>Streaming Feature in Hadoop</li>
          <li>Map Reduce Job Run using Python</li>
          <li>Writing a PIG UDF in Python</li>
          <li>Writing a HIVE UDF in Python</li>
          <li>Pydoop and MRjob Basics</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-0">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Python Project Work</h4>
      <div class="checklist">
        <ul>
          <li>Real world project</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="title-area mb-md-5">
  <div class="col-lg-12">
    <div class="event-details-wrap mt-4">
      <h4 class="sec-title mb-25">Requirements</h4>
      <div class="checklist">
        <ul>
          <li>No prior experience is required. We will start from the very basics</li>
          <li>You’ll need to install Anaconda. We will show you how to do that step by step</li>
          <li>Microsoft Excel 2003, 2010, 2013, 2016, or 365</li>
        </ul>
      </div>
    </div>
  </div>
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