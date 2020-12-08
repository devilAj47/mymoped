<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MyMopeds</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mymopeds.css">

    <script>
        $(document).ready(function() {
            $("#ChangePass").click(function() {
                var Rno = $("#txtRno").val();
                var Pwd = $("#txtPwd").val();
                var NewPwd = $("#txtNewPwd").val();
                var CnfNewPwd = $("#txtCnfNewPwd").val();
                //alert(Rno+" "+Pwd+" "+NewPwd+" "+CnfNewPwd);
                
                $.get("change_pass.php?Rno=" + Rno + "&Pwd=" + Pwd + "&NewPwd=" + NewPwd + "&CnfNewPwd=" + CnfNewPwd, function(response) {
                    // $("#message").html(response);
                    if (response == "") {
                        $('#AccDetails').modal('toggle');
                        $('#SuccessDetails').modal('toggle');
                    } else {
                        $('#FailedDetails').modal('toggle');
                    }
                })

            })
            $("#bookSlot").click(function() {
                var bookTime  = $("#txtBookTime").val();
                var bookDate = $("#bookDate").val();
               actionUrl="bookSlot.php?bookDate=" + bookDate + "&bookTime=" + bookTime 
                alert(bookTime+"  "+bookDate);
                
                $.get(actionUrl, function(response) {
                    // $("#message").html(response);
                    alert(response);
                    if (response == "") {
                        
                        alert('Booked Succesfully');
                    } else {
                        alert('Please Try Again');
                    }
                })

            })

        })

    </script>

</head>

<body>
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

                <div class="modal pb-4 pt-4 mt-4" tabindex="-1" role="dialog" id="bookYourRide">
                    <div class="modal-dialog">
                        <div class="modal-content bg-black br-yellow">
                            <div class="modal-header bg-black text-yellow mb-4 p-2">
                                <h5 class="modal-title">Book Your Ride</h5>
                                <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <center>
                                        <div class="form-group col-md-7">

                                            <label for="bookDate" class="text-yellow">
                                                Date </label>
                                            <div class="spinner-border text-yellow" id="namecheck" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>


                                            <input type="date" class="form-control btn-br-normal bg-yellow" name="bookDate" id="bookDate" placeholder="Date">



                                        </div>

                                        <div class="form-group col-md-7">
                                            <label for="txtBookTime" class="text-yellow ">Slot Number
                                                <small id="errBookTime" class="text-white"></small></label>
                                            <select type="list" class="form-control bg-yellow" id="txtBookTime" name="txtBookTime" placeholder="Time Slot">
                                                <option class="bg-yellow text-black" value="8">8-9</option>
                                                <option class="bg-black text-yellow" value="9">9-10</option>
                                                <option class="bg-yellow text-black" value="10">10-11</option>
                                                <option class="bg-black text-yellow" value="11">11-12</option>
                                                <option class="bg-yellow text-black" value="12">12-13</option>
                                                <option class="bg-black text-yellow" value="13">13-14</option>
                                                <option class="bg-yellow text-black" value="14">14-15</option>
                                                <option class="bg-black text-yellow" value="15">15-16</option>
                                                <option class="bg-yellow text-black" value="16">16-17</option>
                                                <option class="bg-black text-yellow" value="17">17-18</option>
                                                <option class="bg-yellow text-black" value="18">18-19</option>


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
                                            <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="bookSlot" id="bookSlot" type="button" value='bookSlot'>Book Now!</div>
                                        </div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <a href="logout.php">
                                        <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#Logout">Logout</button>
                                    </a>
                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#AccDetails">Account Details</button>

                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#bookYourRide">Book Your Ride</button>
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
    </div>
    <!------------------------------------------------------Account Details--------------------------------------------->
    <div class="modal pb-4 pt-4 mt-4" tabindex="-1" role="dialog" id="AccDetails">
        <div class="modal-dialog">
            <div class="modal-content bg-black br-yellow">
                <div class="modal-header bg-black text-yellow mb-4 p-2">
                    <h5 class="modal-title">Change Ur Password</h5>
                    <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <center>

                            <div class="form-group col-md-10">
                                <label for="txtRno" class="text-yellow ">Roll Number
                                    <small id="errRno" class="text-white"></small></label>
                                <input type="text" class="form-control btn-br-normal" id="txtRno" name="txtRno" placeholder="Roll number">

                            </div>

                            <div class="form-group col-md-10">
                                <label for="txtPwd" class="text-yellow">Current Password
                                    <small id="errPwd" class="text-white"></small></label>
                                <input type="password" class="form-control btn-br-normal" id="txtPwd" name="txtPwd" placeholder="Password">


                            </div>

                            <div class="form-group col-md-10">
                                <label for="txtPwd" class="text-yellow">New Password
                                    <small id="errNPwd" class="text-white"></small></label>
                                <input type="password" class="form-control btn-br-normal" id="txtNewPwd" name="txtNewPwd">


                            </div>

                            <div class="form-group col-md-10">
                                <label for="txtPwd" class="text-yellow">Confirm New Password
                                    <small id="errCnfNewPwd" class="text-white"></small></label>
                                <input type="password" class="form-control btn-br-normal" id="txtCnfNewPwd" name="txtCnfNewPwd">


                            </div>



                            <div class="form-row justify-content-around">
                                <div class="btn btn-br-normal btn-black col-md-5 z-index_psv" name="ChangePass" id="ChangePass" type="button" value='changepass'>Change Password
                                    <small id="message" class="text-white"></small></div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="SuccessDetails">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-black br-yellow">
                <div class="modal-header bg-black text-yellow pl-4 mb-4 p-2">
                    <h5 class="modal-title">Mymopeds</h5>
                    <button type="button" class="close text-yellow" data-dismiss="modal" style="color:yellow;" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-yellow">Password Changed Successfully!</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-black" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" tabindex="-1" role="dialog" id="FailedDetails">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-black br-yellow">
                <div class="modal-header bg-black text-yellow pl-4 mb-4 p-2">
                    <h5 class="modal-title">Mymopeds</h5>
                    <button type="button" class="close text-yellow" data-dismiss="modal" style="color:yellow;" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-yellow">Please check your password again.</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-black" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
