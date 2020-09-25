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

    <title>MyMopeds</title>
</head>

<body>
    <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

    <div class="">
        <div class="">
            <div class="">
                <center>
                    <div class="container-fluid bg-black header-height row ">
                        <div class="row col mt-4">
                            <!--                    <div class="mr-4 ml-4"><img src="images/logo.png" class="rounded-circle logo"></div>-->
                            <div class="text-yellow">
                                <span class="h1">MyMopeds</span>

                            </div>
                            <div class="row mt-2 col justify-content-end">

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
                                        <a class="nav-link h6" href="#">Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link h6" href="#">FAQs</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">

                                    <div class="btn btn-black my-2 my-sm-0 mr-4" id="SignUp">SignUp</div>
                                    <div class="btn btn-black my-2 my-sm-0 mr-4" id="login">LogIn</div>
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



        <div class="container-sm bg-black pb-4 pt-4 col-md-4 mt-4  z-index_psv display_none br-yellow" id="signup_form">
            <div class="bg-black br-yellow text-yellow text-center mb-4 p-2">
                <h2>SignUp</h2>
            </div>
            <form action="" method=get enctype="multipart/form-data">

                <center>

                    <div class="form-group col-md-10">

                        <label for="input_rno" class="text-yellow">
                            UserName
                            <div class="spinner-border text-yellow" id="rnocheck" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <span id="checkrno" class="text-right text-white"></span></label>

                        <input type="text" class="form-control btn-br-normal" name="input_rno" id="input_rno" placeholder="UserName">


                    </div>
                    <div class="form-group col-md-10">
                        <label for="input_email" class="text-yellow text-left">Email
                            <span id="validEmail" class="text-white"></span>
                        </label>
                        <input type="email" class="form-control btn-br-normal" name="input_email" id="input_email" placeholder="Email">
                    </div>


                    <div class="form-group col-md-10">
                        <label for="input_pwd" class="text-yellow">Password
                            <div id="validPass" class="text-white"></div>
                        </label>
                        <input type="password" class="form-control btn-br-normal" name="input_pwd" id="input_pwd" placeholder="Password">
                    </div>


                    <div class="form-group col-md-10">
                        <label for="input_mobile" class="text-yellow">Mobile Number
                            <div id="validmob" class="text-white"></div>
                        </label>
                        <input type="text" class="form-control btn-br-normal" name="input_mobile" id="input_mobile" placeholder="Mobile Number">


                    </div>
                    <div class="form-group col-md-10">
                        <label for="input_category" class="text-yellow">Category
                            <div id="validCat" class="text-white"></div>
                        </label>

                        <select name="input_category" id="input_category">
                            <option value="worker">Worker</option>
                            <option value="citizen">Citizen</option>
                        </select>


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
                        <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="process_btn" id="process_btn" type="button" value='signup'>Sign In</div>

                    </div>
                </center>
            </form>

        </div>
        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->



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
        <div class="pt-4 bg-black justify-content-around pb-5">
            <div class="mb-4 text-yellow  bg-black br-yellow text-center">
                <h1>Our Services</h1>
            </div>

            <div class="row justify-content-around ">
                <div class="card mt-3 br-yellow text-black" style="width: 18rem;">
                    <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                    <div class="card-body bg-yellow">
                        <h2>Find a Worker</h2>
                        <p class="card-text">
                            EasyWorker helps a citizen to counter the daily life problems like fixing taps or getting some electrical work done.
                        </p>
                    </div>
                </div>

                <div class="card mt-3 br-yellow text-black" style="width: 18rem; ">
                    <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                    <div class="card-body bg-yellow">
                        <h2>Find Work</h2>
                        <p class="card-text">EasyWorker also sets platform for different class of workers like Electrician, Plumber, Carpenter and what not to find work in many cities.</p>
                    </div>
                </div>

                <div class="card mt-3 br-yellow text-black" style="width: 18rem;">
                    <img class="card-img-top" src="images/test_6.jpg" alt="Card image cap">
                    <div class="card-body bg-yellow">
                        <h2>Post Work</h2>
                        <p class="card-text">EasyWorker helps citizens to post their work so that a specfic class of workers could get notified and helps the problem to be solved in minimum time possible. </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
        <div class="bg-black">

            <div class="row">
                <div class="col-md-6">
                    <img src="images/test_6.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 justify-content-around">
                    <center>
                        <div class="h2 mt-3 pb-2 text-center col-md-8 br-yellow text-yellow">Meet The Developer</div>

                        <div class="mt-4 text-white col-md-9 text-left">I am currently pursuing B.Tech in Computers from Thapar University, Patiala. Builting this website is one of the best experience because it helped me to think about the aspects of the coding that are very usefull in a coder's daily routine.</div>
                    </center>
                </div>

            </div>

        </div>


        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
        <div class="bg-black  justify-content-around ">
            <div class="text-white text-center h4 pt-4     ">Top FAQs</div>
            <div class="text-white text-center pb-5">Renting a Bike should be Easy, Like our FAQs</div>
            <div class=" row justify-content-around ">
                <div class="col-md-6 border pd-5">
                    <div class=" border">
                        <div class="text-white">How do I pay?</div>
                        <div class="text-white">You can pay online using Paytm or Google Pay only.</div>
                    </div>
                    <div class=" border">
                        <div class="text-white">Where can I pick up the bike from?</div>
                        <div class="text-white">The bike/scooter could be pick up from Thapar's Parking.</div>
                    </div>
                    <div class=" border">
                        <div class="text-white">Will I get a complementry helmet for driving?</div>
                        <div class="text-white">MyMopeds provides one helmet complementry with each booking. It must be returned while returning the scooty.</div>
                    </div>

                </div>
                <div class="col md-6 border pd-5">
                    <div class="border">
                        <div class="text-white">Will I get compensation if I return scooty before time?</div>
                        <div class="text-white">No, the amount will be charged on hourly basis.</div>
                    </div>
                    <div class=" border">
                        <div class="text-white">Where do I park the bike/scooter after use?</div>
                        <div class="text-white">You must park the vehicle back in the Thapar's parking area.</div>
                    </div>
                    <div class=" border">
                        <div class="text-white">What documents do I need to show while booking?</div>
                        <div class="text-white">You must show your college ID card and a valid driving license either while or before pick-up.</div>
                    </div>
                </div>

            </div>


            <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
           


            <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

        </div>
        <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
    </div>
</body>

</html>





<!--

#FFE473- Yellow
#28292B- Black

  -->
