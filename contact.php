<?php
?>

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

<div class="page-header header-filter" data-parallax="true" style="height:50vh">
    <div class="container">


        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Contact <a style="color:#d32f2f">Us</a></h1>
                    <h3>Have any problems? Don't hesitate to contact us.</h3>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="main main-raised" id="featuresTitle" style="padding-bottom: -30%">
    <div class="container">
        <div data-aos="fade-up">
            <div class="container" style="text-align:left">
                <div data-aos="fade-up">
                    <div class="section" style="padding-bottom: 2%; padding-top:2%">
                        <div data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-8  ">
                                    <form class="contact-form" action="contact-request" method="post" id="contactform">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating bmd-label" style="padding-bottom:3%">Your Name</label>
                                                    <input type="name" class="form-control" id="name" name="name">
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
                                            <div class="col-md-4">
                                                <button class="btn btn-primary btn-raised" type="submit" value="Submit" form="contactform">
                                                    Send Message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <h3 class="title">Our email</h3>
                                        <p class="title" style="margin-bottom: 0">For any general questions:</p>
                                        <p>contact@remocademy.com</p>
                                        <p class="title" style="margin-bottom: 0">Talk to the developers directly:</p>
                                        <p>developer@remocademy.com</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php

        include('./include/footer.html');

        ?>



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
<script src="/assets/js/script.js" type="text/javascript"></script>

</body>


</html>

