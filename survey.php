<?php
?>

<!doctype html>
<html lang="en">

<?php

include('./include/header.html');

?>

<body class="index-page sidebar-collapse">

<?php
include('./include/navbar.html');
?>

<div class="page-header header-filter" data-parallax="true" style="height:50vh">
    <div class="container">


        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>Answer a <a style="color:#d32f2f">Survey</a></h1>
                    <h3>How is/was your online learning experience? Share your thoughts</h3>
                </div>
            </div>
        </div>


    </div>
</div>


<div class="main main-raised" id="featuresTitle"  style="padding-bottom: -30%">
    <div class="container">
        <div data-aos="fade-up">
            <div class="container" style="padding-top:10%">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="card card-login">
                            <form class="form" action="" class="pageclip-form" method="post" onResponse="return redirect()" id="featureForm">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">Survey</h4>
                                </div>
                                <div class="card-body">


                                    <div class="input-group" style="margin-top:10%">

                                        <div class="input-group-prepend">
                                              <span class="input-group-text" style="padding-right: 0px">
                                                <p>You are: </p>
                                              </span>
                                        </div>
                                        <div class="form-check" style="padding: 0px; margin: 0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Who" id="studentRadio" value="Students" checked>
                                                Student
                                                <span class="circle">
                                                    <span class="check"></span>
                                                     </span>
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding: 0px; margin: 0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Who" id="teacherRadio" value="Teachers" >
                                                Teacher
                                                <span class="circle">
                                                    <span class="check"></span>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding: 0px; margin: 0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Who" id="parentRadio" value="Parents">
                                                Parent
                                                <span class="circle">
                                                    <span class="check"></span>
                                                    </span>
                                            </label>
                                        </div>
                                        <div class="form-check" style="padding: 0px; margin: 0">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="Who" id="otherRadio" value="Other">
                                                Other
                                                <span class="circle">
                                                    <span class="check"></span>
                                                    </span>
                                            </label>
                                        </div>
                                    </div>




                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" type="text" rows="2" placeholder="What platform do you currently use for remote learning?" style="margin-left:3%" name="Platform" id="featureTextarea" required></textarea>
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" type="text" rows="2" placeholder="Your remote learning experience (Positive)" style="margin-left:3%" name="Advantage" id="featureTextarea" required></textarea>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        </div>
                                        <textarea class="form-control" type="text" rows="2" placeholder="You remote learning experience (Negative)" style="margin-left:3%" name="Disadvantage" id="featureTextarea" required></textarea>
                                    </div>


                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="pageclip-form__submit btn  btn-primary btn-link btn-wd btn-lg" id="submitBtn" onclick="redirect()">
                                        <span>Submit Survey</span>
                                    </button>
                                </div>
                            </form>

                            <p id="success" style="padding-bottom: 4%; color: #00c853"></p>
                            <p id="error" style="padding-bottom: 4%; color: red"></p>

                        </div>
                        <p>Do you have a feature you want to see in our platform? Request your feature <a href="request.php" style="color:blue">here</a>, we will try our best to implement the requested feature in our platform</p>
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

<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/moment.min.js"></script>
<script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
<script src="./assets/js/typed.js" type="text/javascript"></script>
<script src="/assets/js/script.js" type="text/javascript"></script>

<script>
    $("#submitBtn").on("click", function(event) {
        event.preventDefault();
        console.log("Pressed");
        var temp = document.getElementById('featureTextarea').value;
        var x = document.getElementById("success");
        var y = document.getElementById("error");
        if (temp === ""){
            console.log("nada");
            x.style.display = "none";
            y.style.display = "block";
            document.getElementById('error').innerHTML = "Do not leave the field empty";


        } else { y.style.display = "none";x.style.display = "block"; document.getElementById('success').innerHTML = "Thank you for answering our survey, you will be redirected back to this page in few seconds"; document.getElementById('error').innerHTML = "";setTimeout(
            function(){
                $("#featureForm").submit();

            },
            3000
        );}


    });
    function redirect(){
        $("#submitBtn").on("click", function(event) {

            event.preventDefault();
            var temp = document.getElementById('featureTextarea').value;
            if (temp !== ""){
                setTimeout(
                    function(){
                        $("#featureForm").submit();
                    },
                    3000
                );
            }
        });
    }
</script>
</body>


</html>

