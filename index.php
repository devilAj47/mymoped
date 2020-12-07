<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mymopeds.css">
    <!-- <link rel="stylesheet" href="css/Normal.css">
    <script src="js/signup-workseasy.js"></script> -->




    <!--
    <script src="js/validations.js"></script>
    <script src="js/login-check.js"></script>
-->
    <script>
        $(document).ready(function() {
            $("#singup_btn").click(function() {
                var uid = $("#txtRno").val();
                var ueid = $("#txtUid").val();
                var upwd = $("#txtPwd").val();
                var umob = $("#txtMob").val();
                var uname = $("#txtName").val();

                var actionUrl = "signup.php?uid=" + uid + "&ueid=" + ueid + "&upwd=" + upwd + "&umob=" + umob + "&uname=" + uname;

                $.get(actionUrl, function(response) {
                    if (response == "") {
                        $('#Signup').modal('toggle');
                        $('#successSignup').modal('toggle');
                    }
                })
            })
            $("#Login_btn").click(function() {

                //                  
                var rno = $("#txtLoginRno").val();

                var pwd = $("#txtLoginPwd").val();

                var actionUrl = "login.php?rno=" + rno + "&pwd=" + pwd;

                $.get(actionUrl, function(output) {
                    if (output == "") {
                        $("#Login").modal('toggle');
                        
//                        
                    }

                })
            })
        })

    </script>



    <title>MyMopeds</title>

    <!--    ---------------login script----------------->



</head>

<body>
    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    <div class="">
        <div class="">
            <div class="">
                <center>
                    <div class="container-fluid bg-black header-height row " id="home">
                        <div class="row col mt-4 justify-content-around">
                            <!--                    <div class="mr-4 ml-4"><img src="images/logo.png" class="rounded-circle logo"></div>-->
                            <div class="text-yellow col-md-4">
                                <span class="h1">MyMopeds</span>

                            </div>
                            <div class=" mt-2 col justify-content-end col-md-4">

                                <div class="mr-4 ml-4">
                                    <button type="button" class="btn btn-br-normal btn-black">8264245458</button>

                                </div>
                            </div>
                        </div>


                    </div>
                </center>
                <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

                <div>
                    <center>
                        <nav class="navbar navbar-expand-lg navbar-light bg-yellow">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-left">
                                    <li class="nav-item ">
                                        <a class="nav-link h6" href="#home">Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#contactUs">Contact</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link h6" href="#faqs">FAQs</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">

                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#Signup">SignUp</button>
                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#Login">Login</button>

                                </form>
                            </div>
                        </nav>
                    </center>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner min-height">
                    <div class="carousel-item active">
                        <img class="d-block w-100 min-height" src="images/vespa_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 min-height" src="images/vespa_1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 min-height" src="images/test_6.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
<!--             MODALS            -->
       <!--Successfull Signup Modal -->

        <div class="modal" tabindex="-1" role="dialog" id="successSignup">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-black br-yellow">
                    <div class="modal-header bg-black text-yellow pl-4 mb-4 p-2">
                        <h5 class="modal-title">You have Signed Up Successfully!</h5>
                        <button type="button" class="close text-yellow" data-dismiss="modal" style="color:yellow;" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-yellow">Please Login to Continue!</p>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-black" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

<!--                          Signup Modal           -->

        <div class="modal pb-4 pt-4 mt-4" tabindex="-1" role="dialog" id="Signup">
            <div class="modal-dialog">
                <div class="modal-content bg-black br-yellow">
                    <div class="modal-header bg-black text-yellow mb-4 p-2">
                        <h5 class="modal-title">SignUp</h5>
                        <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center>
                                <div class="form-group col-md-10">

                                    <label for="txtName" class="text-yellow">
                                        Full Name
                                        <div class="spinner-border text-yellow" id="namecheck" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <span id="checkrno" class="text-right text-white"></span></label>

                                    <input type="text" class="form-control btn-br-normal" name="txtName" id="txtName" placeholder="Full Name">


                                </div>

                                <div class="form-group col-md-10">
                                    <label for="txtPwd" class="text-yellow">Password
                                        <small id="errPwd" class="text-white"></small></label>
                                    <input type="password" class="form-control btn-br-normal" id="txtPwd" name="txtPwd" placeholder="Password">


                                </div>

                                <div class="form-group  col-md-10">
                                    <label for="txt" class="text-yellow">Email address

                                        <small id="emailHelp" class="text-white"></small>
                                    </label>
                                    <input type="email" class="form-control btn-br-normal" id="txtUid" placeholder="Email" name="txtUid">

                                </div>

                                <div class="form-group col-md-10">
                                    <label for="txtRno" class="text-yellow ">Roll Number
                                        <small id="errRno" class="text-white"></small></label>
                                    <input type="text" class="form-control btn-br-normal" id="txtRno" name="txtRno" placeholder="Roll number">

                                </div>

                                <div class="form-group col-md-10">
                                    <label for="txtMob" class="text-yellow ">Mobile Number
                                        <small id="errMob" class="text-white"></small></label>
                                    <input type="text" class="form-control btn-br-normal" id="txtMob" name="txtMob" placeholder="Mobile Number">

                                </div>

                                <div class="form-group ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="input_chkTNC" required>
                                        <label class="form-check-label text-yellow" for="input_chkTNC">
                                            Accept Our Terms and Conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row justify-content-around">
                                    <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="signup_btn" id="singup_btn" type="button" value='signup'>Sign Up</div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!------------**************Login**************--------->

        <div class="modal pb-4 pt-4 mt-4 " tabindex="-1" role="dialog" id="Login">
            <div class="modal-dialog">
                <div class="modal-content bg-black br-yellow">
                    <div class="modal-header bg-black text-yellow mb-4 p-2">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center>
                                <div class="form-group col-md-10">
                                    <label for="txtLoginRno" class="text-yellow ">Roll Number
                                        <small id="errLoginRno" class="text-white"></small></label>
                                    <input type="text" class="form-control btn-br-normal" id="txtLoginRno" name="txtLoginRno" placeholder="Roll number">

                                </div>

                                <div class="form-group col-md-10">
                                    <label for="txtLoginPwd" class="text-yellow">Password
                                        <small id="errLoginPwd" class="text-white"></small></label>
                                    <input type="password" class="form-control btn-br-normal" id="txtLoginPwd" name="txtLoginPwd" placeholder="Password">
                                </div>

                                <div class="form-row justify-content-around">
                                    <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="Login_btn" id="Login_btn" type="button" value='login'>Login</div>
                                </div>
                            </center>
                        </form>
                    </div>

                </div>
            </div>
        </div>





    </div>


   

    <!---------------------------------------->
    <div class="container-sm br-yellow bg-black pb-4 pt-4 col-md-4 mt-4 display_none position-absolute z-index_psv  br-black" data-dismiss="modal" id="login_form">
        <div class="bg-black br-yellow text-yellow text-center mb-4 p-2">
            <h2>Login</h2>
        </div>
        <form action="" method=get enctype="multipart/form-data">

            <center>

                <div class="form-group col-md-10">
                    <label for="input_rno_lgn" class="text-yellow">User Name </label>
                    <input type="text" class="form-control btn-br-normal" name="input_rno" id="input_rno_lgn" placeholder="UserName">
                </div>



                <div class="form-group col-md-10">
                    <label for="input_pwd_lgn" class="text-yellow">Password</label>
                    <input type="password" class="form-control btn-br-normal" name="input_pwd" id="input_pwd_lgn" placeholder="Password">
                </div>
                <span id="login_status" class="text-white mb-2 mt-2"> </span>
                <div class="form-row justify-content-around">
                    <button class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="login_process" id="login_process" type="button" value='login_process'>Login</button>
                </div>

            </center>
        </form>

    </div>
    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    <div class="bg-black" id="about">

        <div class="row">
            <div class="col-md-6">
                <img src="images/test_6.jpg" width="100%" alt="">
            </div>
            <div class="col-md-6 justify-content-around">
                <center>
                    <div class="h2 mt-3 pb-2 text-center col-md-8 br-yellow text-yellow">Our Services</div>

                    <div class="mt-4 text-white col-md-9 text-left">We help the students to provide with the rented vehicles for easy access to the Patiala City at low cost and easy to book services. MyMopeds also provides a complementry helmet for safety purposes!</div>
                </center>
            </div>

        </div>

    </div>


    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    <div class="pt-4 bg-black justify-content-around pb-5" id="contactUs">
        <div class="mb-4 text-yellow  bg-black br-yellow text-center">
            <h1>Meet the Developers</h1>
        </div>

        <div class="row justify-content-around ">
            <div class="card mt-3 br-yellow text-black" style="width: 18rem;">
                <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                <div class="card-body bg-yellow">
                    <h2>Anmol Jindal</h2>
                    <p class="card-text">
                        Currently in 3rd year COE, the basic idea was to help students for easy transportation through the city!
                    </p>
                </div>
            </div>

            <div class="card mt-3 br-yellow text-black" style="width: 18rem; ">
                <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                <div class="card-body bg-yellow">
                    <h2>Himani Bansal</h2>
                    <p class="card-text"> Currently in 3rd year COE, the basic idea was to help students for easy transportation through the city!</p>
                </div>
            </div>

            <div class="card mt-3 br-yellow text-black" style="width: 18rem;">
                <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                <div class="card-body bg-yellow">
                    <h2>Anuj Singla</h2>
                    <p class="card-text"> Currently in 3rd year COE, the basic idea was to help students for easy transportation through the city! </p>
                </div>
            </div>
        </div>
    </div>



    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
    <div class="bg-black  justify-content-around " id="faqs">
        <div class="text-white text-center h4 pt-4     ">Top FAQs</div>
        <div class="text-white text-center pb-5">Renting a Bike should be Easy, Like our FAQs</div>
        <div class="row justify-content-around col-md-12">
            <div class="col-md-5 border mt-2 ">
                <div class=" border mb-2 mt-2">
                    <div class="text-white pl-1">How do I pay?</div>
                    <div class="text-white pl-1">You can pay online using Paytm or Google Pay only.</div>
                </div>
                <div class=" border mb-2">
                    <div class="text-white pl-1">Where can I pick up the bike from?</div>
                    <div class="text-white pl-1">The bike/scooter could be pick up from Thapar's Parking.</div>
                </div>
                <div class=" border mb-2">
                    <div class="text-white pl-1">Will I get a complementry helmet for driving?</div>
                    <div class="text-white pl-1">MyMopeds provides one helmet complementry with each booking. It must be returned while returning the scooty.</div>
                </div>

            </div>
            <div class="col-md-5 border mt-2 ">
                <div class="border mb-2 mt-2">
                    <div class="text-white pl-1 ">Will I get compensation if I return scooty before time?</div>
                    <div class="text-white pl-1">No, the amount will be charged on hourly basis.</div>
                </div>
                <div class=" border mb-2">
                    <div class="text-white pl-1">Where do I park the bike/scooter after use?</div>
                    <div class="text-white pl-1">You must park the vehicle back in the Thapar's parking area.</div>
                </div>
                <div class=" border mb-2 ">
                    <div class="text-white pl-1">What documents do I need to show while booking?</div>
                    <div class="text-white pl-1">You must show your college ID card and a valid driving license either while or before pick-up.</div>
                </div>
            </div>

        </div>


        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->



        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    </div>
    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
    <div class="bg-black">
        <div class="text-white">
            <marquee behavior="" direction="right">Please Remain calm</marquee>
        </div>

    </div>
    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    
    </div>
</body>

</html>





<!--

#FFE473- Yellow
#28292B- Black

  -->
