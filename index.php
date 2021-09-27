<!doctype html>
<html lang="en">

<?php

include('./include/header.html');

?>

<body class="index-page sidebar-collapse">


<?php
if (isset($_GET) & $_GET['sent'] == 'success'){
    echo "<div class=\"alert alert-success\" style=\"z-index:2000\">
    <div class=\"container\">
        <div class=\"alert-icon\">
            <i class=\"material-icons\">check</i>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
        </button>
        <b>Success:</b> Your message was successfully sent
    </div>
</div>";
}

if (isset($_GET) & $_GET['sent'] == 'error'){
    echo "<div class=\"alert alert-danger\" style='z-index: 2000'>
    <div class=\"container\">
        <div class=\"alert-icon\">
            <i class=\"material-icons\">error_outline</i>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
        </button>
        <b>Error:</b> Error occurred while sending your message, please try again
    </div>
</div>";
}


?>
<?php
include('./include/navbar.html');
?>


<div class="page-header header-filter" data-parallax="true">
    <div class="container">


        <section id="home" class="in active" style="padding-top:7%;">
            <article class="home-content">
                <div id="app"></div>
                <h4>Coming Soon...</h4>
                <header role="home-title">

                    <h2>Remote
                        <div id="typed-strings"><span>Academy</span></div>
                        <span id="typed" style="white-space:pre;"></span></h2>
                </header>
                <p>Remote Learning platform, built for students, by students
                </p>

            </article>
            <!-- <div id="countdown"></div> -->

            <div class="row">
                <div style="margin:auto; padding-top:20px;padding-bottom:10px">
                    <button class="btn btn-success" style="margin:10px" onclick="location.href='request'">Request a Feature</button>
                    <button class="btn btn-info" style="margin:10px" onclick="location.href='./survey'">Answer a Survey</button>

                </div>
            </div>

            <p>Have questions? Email us at </p><a href="mailto:contact@remocademy.com" style="color:#ebebeb">contact@remocademy.com</a>

            <a href="#featuresTitle"><div class="scroll-down"></div></a>


        </section>


    </div>
</div>


<div class="main main-raised" id="featuresTitle">
    <div class="container">



            <div class="highlight-phone">
                <div class="container" style="text-align:left">

                    <div data-aos="fade-up">
                        <div class="section text-center" style="padding-bottom: 2%; padding-top:2%">
                            <div class="title">
                                <h5>What makes Remocademy Special?</h5>
                                <h2 class="title" style="margin-top:5px">Key Features</h2>
                            </div>
                        </div>
                    </div>


                    <div data-aos="fade-up">
                    <div class="row" style="padding-top: 50px">

                        <div class="col-md-8">
                            <div class="intro" >
                                <h2 style="align:left">Homework Manager</h2>
                                <p>Homework Manager allows for faster and easier homework organisation and management for both teachers and students. It includes many features such as:</p>
                                <br>
                                <ul>
                                    <li class="list">Create Homework (Short text, Long text, multiple choice etc...)</li>
                                    <li class="list">Instantly distribute the homework to specific classes</li>
                                    <li class="list">Complete and submit homework without leaving the platform</li>
                                    <li class="list">Mark homework both automatically and manually</li>
                                </ul>

                                <button class="btn btn-success" onclick="location.href='request'" style="margin-top: 10px;">Request a Feature -></button>
                            </div>

                        </div>
                        <div class="col-sm-4" style="margin: auto">
                            <div class="d-none d-md-block iphone-mockup"><img src="./assets/img/inhomework.jpg" class="device">
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <div data-aos="fade-up">
            <div class="highlight-phone">
                <div class="container" style="text-align:right">
                    <div class="row">
                        <div class="col" class="text-center">
                            <div class="d-none d-md-block iphone-mockup"><img src="./assets/img/incommunicate.png" class="device">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="intro">
                                <h2>Real-time Communication</h2>
                                <p style="text-align:left">Communicating with Students, Teachers, and Parents via email can be a hassle. Live chat system allows for fast and easy communication with everyone in the school.
                                    Future versions will allow video chatting for more visual and entertaining online classes.<br>
                                </p>
                                <button class="btn btn-success" onclick="location.href='request'" style="margin-top: 10px;">Request a Feature -></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up">
                <div class="highlight-phone">
                    <div class="container" style="text-align:left">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="intro" >
                                    <h2 style="align:left">Classnote Manager</h2>
                                    <p>Students can take class notes rapidly using markdown language & handwritten if you have a touch display. Classnotes can be organised into different subjects, purposes, dates and other custom ways to keep all your notes in one place without clutter.
                                        Teachers has a choice to view student's class notes to keep track of student's progress.
                                    </p>
                                    <button class="btn btn-success" onclick="location.href='request'" style="margin-top: 10px;">Request a Feature -></button></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-none d-md-block iphone-mockup"><img src="./assets/img/innote.png" class="device">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div data-aos="fade-up">
                <hr>
            </div>
        </div>

        <div class="container">
            <div data-aos="fade-up">
                <div class="section text-center" style="padding-bottom: 2%">
                    <div class="title">
                        <h5>What else do we offer?</h5>
                        <h2 class="title" style="margin-top:5px" >All Features</h2>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up">
                <div class="card card-nav-tabs card-plain">
                    <div class="card-header card-header-danger">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item featuretab">

                                        <a class="nav-link active" href="#students" data-toggle="tab"><img src="https://img.icons8.com/material-rounded/24/ffffff/student-female.png" style="margin-bottom: -2%;padding-right: 2%;padding-left: 2%;display: inline"/>Students</a>
                                    </li>
                                    <li class="nav-item featuretab">
                                        <a class="nav-link" href="#teachers" data-toggle="tab"><img src="https://img.icons8.com/material-rounded/24/ffffff/businessman--v2.png" style="margin-bottom: -2%;padding-right: 2%;padding-left: 2%;display: inline"/>Teachers</a>
                                    </li>
                                    <li class="nav-item featuretab">
                                        <a class="nav-link" href="#parents" data-toggle="tab"><img src="https://img.icons8.com/material-rounded/24/ffffff/family.png" style="margin-bottom: -2%;padding-right: 2%;padding-left: 2%;display: inline"//>Parents</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div data-aos="fade-up">
                <div class="card-body ">
                    <div class="tab-content text-center">


                        <div class="tab-pane active" id="students">
                            <div class="features-blue" style="margin-top:30px">
                                <div class="container">
                                    <div class="row features">
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">assignment</i>
                                            <h3 class="name" style="color: #4b4b4b">Homework System</h3>
                                            <p class="description">Homework Manager allows you to manage all your assignments and submit them with just few clicks. It notifies you before the due date so that you don't miss your assignments anymore</p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">calendar_today</i>
                                            <h3 class="name" style="color: #4b4b4b">Manage timetable & Calendar</h3>
                                            <p class="description">
                                                Create/View your school timetable and manage events using the calendar. This feature allows you to view all your
                                                assignment due dates, class times, and other school event on one page
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">library_books</i>
                                            <h3 class="name" style="color: #4b4b4b">Organise class resources</h3>
                                            <p class="description">
                                                Upload your class resources, such as textbooks*, class notes, and revision notes and organise them for different subjects
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">chat_bubble</i>
                                            <h3 class="name" style="color: #4b4b4b">Easily communicate with teachers**</h3>
                                            <p class="description">
                                                Live chat feature allows you to communicate with your teachers and ask questions remotely.
                                                It's the best way if you are studying at home and have a quick question to ask
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">group_add</i>
                                            <h3 class="name" style="color: #4b4b4b">Live Collaboration with classmates</h3>
                                            <p class="description">
                                                Have a group project? You can collaborate with your classmates no matter where they are using the live chat & video conference feature
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">edit</i>
                                            <h3 class="name" style="color: #4b4b4b">Take and manage Class Notes</h3>
                                            <p class="description">
                                                You can take rapid class notes using markdown language on our ClassNote Manager. It's not limited to remote learning, and you can
                                                use this feature in standard in-school classes as well
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="teachers">
                            <div class="features-blue" style="margin-top:30px">
                                <div class="container">
                                    <div class="row features d-flex justify-content-center">
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">question_answer</i>
                                            <h3 class="name" style="color: #4b4b4b">Communicate and Help Students**</h3>
                                            <p class="description">
                                                You can talk and help your students anywhere using the live chat feature. It allows for a rapid communication without meeting the students face to face.
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="36" height="36" viewBox="0 0 24 24">
                                                <path fill="#4b4b4b" d="M14,12H15.5V14.82L17.94,16.23L17.19,17.53L14,15.69V12M4,2H18A2,2 0 0,1 20,4V10.1C21.24,11.36 22,13.09 22,15A7,7 0 0,1 15,22C13.09,22 11.36,21.24 10.1,20H4A2,2 0 0,1 2,18V4A2,2 0 0,1 4,2M4,15V18H8.67C8.24,17.09 8,16.07 8,15H4M4,8H10V5H4V8M18,8V5H12V8H18M4,13H8.29C8.63,11.85 9.26,10.82 10.1,10H4V13M15,10.15A4.85,4.85 0 0,0 10.15,15C10.15,17.68 12.32,19.85 15,19.85A4.85,4.85 0 0,0 19.85,15C19.85,12.32 17.68,10.15 15,10.15Z" />
                                            </svg>
                                            <h3 class="name" style="color: #4b4b4b">Create Timetables</h3>
                                            <p class="description">
                                                Create dynamic timetables for each day of the week or a special timetable a particular day.
                                                Instantly distribute the timetables to your students and remind them when they have a class so they don't miss it.

                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">publish</i>
                                            <h3 class="name" style="color: #4b4b4b">Create and Publish Homework</h3>
                                            <p class="description">
                                                You can easily create and publish homework to students in form of long answer/short answer/survey style etc...
                                                Track if students have handed in their homework and set deadlines for when the homework is due.
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">class</i>
                                            <h3 class="name" style="color: #4b4b4b">Manage Class Materials</h3>
                                            <p class="description">
                                                Create/Upload class materials, such as videos, presentations, and images to make your class more interesting and visual.
                                                You can distribute the materials when the class time comes, or choose to uploaded as a pool of learning resources.
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">grade</i>
                                            <h3 class="name" style="color: #4b4b4b">Grade Manager</h3>
                                            <p class="description">
                                                Record student's grade each lesson/term/grade and easily distribute it to parents and students. Supports different grading system,
                                                such as A-G, A*-G, 7-1, 9-1 etc...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="parents">
                            <div class="features-blue" style="margin-top:30px">
                                <div class="container">
                                    <div class="row features d-flex justify-content-center">
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">call_received</i>
                                            <h3 class="name" style="color: #4b4b4b">Receive Newsletters</h3>
                                            <p class="description">Receive school news, events, and other information about the school on one platform with a glance
                                                You can also easily go back to archived newsletters without searching through you email inbox
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">visibility</i>
                                            <h3 class="name" style="color: #4b4b4b">View child's grades</h3>
                                            <p class="description">
                                                Get your child's grade instatly electronically (You can also prevent from your child hiding the school report). You can also your archive and see all the previous reports to see your child's growth
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item">
                                            <i class="material-icons md-36" style="color: #4b4b4b">forum</i>
                                            <h3 class="name" style="color: #4b4b4b">Chat with the teacher</h3>
                                            <p class="description">
                                                Have questions about your child or school life? You don't have to write convoluted email to teachers to talk with them anymore. You can chat
                                                with the teachers outside of school any time using the live chat feature

                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 item" >
                                            <i class="material-icons md-36" style="color: #4b4b4b">people</i>
                                            <h3 class="name" style="color: #4b4b4b">Create community</h3>
                                            <p class="description">
                                                Create community with other parents in your class. Discuss anything about the child and school life and share thoughts among other parents in the community.
                                                It can be the best place to get a solution if you have a problem with your child
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div data-aos="fade-up" style="margin-bottom: 3%">
                        <h6 style="text-align:left">*Please follow the textbook publisher's copyright policy</h6>
                        <h6  style="text-align:left">**School's Privacy Policy may need to be modified</h6>
                    </div>

                    <div data-aos="fade-up">
                        <hr>
                    </div>

                   <div style="padding-bottom: 20px">
                       <div data-aos="fade-up">
                           <div class="section text-center" style="padding-bottom: 2%; padding-top:2%">
                               <div class="title" style="margin-bottom: 0">
                                   <h5>When would we offer these features?</h5>
                                   <h2 class="title" style="margin-top:5px; margin-bottom: 0">Our plan</h2>
                               </div>
                           </div>
                       </div>
                       <h3 class="title">Stage 1</h3>
                       <h4>• Release <strong>Standalone Homework Management System </strong> for students</h4>
                       <h4>• Release <strong>Timetable + Calendar System</strong> for students</h4>
                       <h4>• Release <strong>Classnote System</strong> for students</h4>
                       <h3 class="title">Stage 2</h3>
                       <h4>• Link student's homework management system with teacher's <strong>Homework Administration System</strong></h4>
                       <h4>• Link student's timetable & calendar with teacher's <strong>Timetable Administration System</strong></h4>
                       <h4>• Release <strong>Grade Manager</strong> for teachers</h4>
                       <h3 class="title">Stage 3</h3>
                       <h4>• Release <strong>Grade Viewer</strong> for parents</h4>
                       <h4>• Release <strong>School News Feed System</strong> for parents</h4>
                       <h3 class="title">Stage 4</h3>
                       <h4>• Release organisation-wide instant <strong>Communication System</strong> (Text based only)</h4>
                       <h4>• Extend the system to parents</h4>
                       <h3 class="title">Stage 5</h3>
                       <h4>• Enable attachments to the communication system</h4>
                       <h3 class="title">Stage 6</h3>
                       <h4>• Release <strong>Live Video Lesson</strong> feature</h4>
                       <h3 class="title">Stage 7</h3>
                       <h4>• Release <strong>Native iOS Application</strong></h4>
                       <h3 class="title">Stage 8</h3>
                       <h4>• Release <strong>Native Android Application</strong></h4>
                       <h3 class="title">Stage 9</h3>
                       <h4>• Release <strong>Native MacOS Application</strong></h4>
                       <h3 class="title">Stage 10</h3>
                       <h4>• Release <strong>Native Windows Application</strong></h4>
                   </div>

                    <div data-aos="fade-up">
                        <hr>
                    </div>


                    <div class="section text-center" style="padding-bottom: 2%">

                        <div data-aos="fade-up">
                            <div class="title">
                                <h5>Interested in our project?</h5>
                                <h2 class="title">Calling Developers!</h2>
                            </div>
                        </div>

                        <div data-aos="fade-up">
                            <h4 class="text-center description">We are small team of students running this project. If you are interested in this project and think you can help us improve our project, please contact us through the form below. We will get back to you as soon as possible.
                                .</h4>
                        </div>

                        <a  id="#devsection">
                        <div data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-8 ml-auto mr-auto">
                                    <form class="contact-form" action="dev-request" method="post" id="devform">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating bmd-label" style="padding-bottom:3%">Your Name</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating bmd-label" style="padding-bottom:3%">Your Email</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating bmd-label" style="padding-bottom:3%">Message</label>
                                            <input type="text" class="form-control" id="msg" name="msg">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 ml-auto mr-auto text-center">
                                                <button class="btn btn-primary btn-raised" type="submit" value="Submit" form="devform">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </a>


                    </div>

                </div>




            <div data-aos="fade-up">

                <?php

                include('./include/footer.html');

                ?>
            </div>

        </div>
    </div>
</div>

<script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="/assets/js/plugins/moment.min.js"></script>
<script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="/assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
<script src="/assets/js/typed.js" type="text/javascript"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="/assets/js/script.js" type="text/javascript"></script>






</body>


</html>
