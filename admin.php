<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MyMopeds</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mymopeds.css">
    <script src="js/angular.js"></script>


    <script>
        $(document).ready(function() {
            $("#ChangePass").click(function() {
                var Rno = $("#txtRno").val();
                var Pwd = $("#txtPwd").val();
                var NewPwd = $("#txtNewPwd").val();
                var CnfNewPwd = $("#txtCnfNewPwd").val();

                //alert(Rno+" "+Pwd+" "+NewPwd+" "+CnfNewPwd);



                //alert(Rno+" "+Pwd+" "+NewPwd+" "+CnfNewPwd);
                var actionUrl = "change_pass.php?Rno=" + Rno + "&Pwd=" + Pwd + "&NewPwd=" + NewPwd + "&CnfNewPwd=" + CnfNewPwd;
                $.get(actionUrl, function(response) {
                    // $("#message").html(response);
                    // alert(response);
                    if (response == "") {

                        $('#AccDetails').modal('toggle');
                        $('#SuccessDetails').modal('toggle');
                    } else {
                        $('#FailedDetails').modal('toggle');
                    }
                })


            })
            $("#bookSlot").click(function() {

                var bookTime = $("#txtBookTime").val();
                var bookDate = $("#bookDate").val();
                var actionUrl = "bookSlot.php?bookDate=" + bookDate + "&bookTime=" + bookTime
                //                alert(bookTime+"  "+bookDate);

                $.get(actionUrl, function(response) {
                    // $("#message").html(response);
                    //                    alert(response);
                    if (response == "") {
                        $('#bookYourRide').modal('toggle');
                        $('#successBooked').modal('toggle');

                    } else {
                        alert(response);
                    }
                })

            })


            $("#membershipLine").click(function() {
                $('#bookYourRide').modal('toggle');
                $('#getMembership').modal('toggle');
            })


            $("#membershipAvail").click(function() {

                var membershipType = $("#txtMembershipType").val();
                alert(membershipType);
                if (membershipType == "month") {
                    var actionUrl = "memberShipMonthprocess.php?membershipType=" + membershipType;
                } else {
                    var actionUrl = "memberShipQuarterprocess.php?membershipType=" + membershipType;
                }


                $.get(actionUrl, function(response) {
                    if (response == "") {
                        alert("Successfully Availed");
                        //                        $('#').modal('toggle');
                        //                        $('#').modal('toggle');

                    } else {
                        alert(response);
                    }
                })

            })

            $("#getAvailableSlots").click(function() {

                var date = $("#").val();

                if (membershipType == "month") {
                    var actionUrl = "getAvailableSlots-process.php?date=" + date;
                }



                $.get(actionUrl, function(response) {
                    if (response == "") {
                        alert("Successfully Availed");
                        //                        $('#').modal('toggle');
                        //                        $('#').modal('toggle');

                    } else {
                        alert(response);
                    }
                })

            })



        })

    </script>

    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

        function showpreview(fyle) {

            if (fyle.files && fyle.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#prev1').attr('src', ev.target.result);
                }
                reader.readAsDataURL(fyle.files[0]);
            }

        }

    </script>
        <!--  -=-=-=-=-=-=-=-Anugular=-=-=-=-=-=-=-=-=-=-=- -->
    <script>
        var varModule = angular.module("ourModule", []);
        varModule.controller("ourController", function($scope, $http) {
            var date= 
            $scope.jsonArrayWork;
            $scope.loadWork = function() {
                var actionUrl="getAvailableSlots-process.php?date=" + date;
                $http.get("getAvailableSlots-process.php").then(success, failiure);

                function success(response) {
                    $scope.jsonArrayWork = response.data;
                    //alert(JSON.stringify(response.data));
                    $("#taskTable").css("display", "block");

                }

                function failiure(response) {
                    alert(response.data);
                }
            }

            $scope.showTaskManager = function() {

                $("#taskManager").modal("show");

            }
            $scope.doDel=function(rid){
                alert(rid);
            }

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
                <!--        Ride Successfully Booked            -->

                <div class="modal" tabindex="-1" role="dialog" id="successBooked">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-black br-yellow">
                            <div class="modal-header bg-black text-yellow pl-4 mb-4 p-2">
                                <h5 class="modal-title">Congratulations!</h5>
                                <button type="button" class="close text-yellow" data-dismiss="modal" style="color:yellow;" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-yellow">You ride has been booked Successfully!</p>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-black" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->
                <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

                <div class="modal pb-4 pt-4 mt-4" tabindex="-1" role="dialog" id="getMembership">
                    <div class="modal-dialog">
                        <div class="modal-content bg-black br-yellow">
                            <div class="modal-header bg-black text-yellow mb-4 p-2">
                                <h5 class="modal-title">Get A Membership!</h5>
                                <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <center>
                                        <div class="form-group col-md-7">
                                            <label for="txtMembershipType" class="text-yellow ">MemberShip
                                                <small id="errMembershipType" class="text-white"></small></label>
                                            <select type="list" class="form-control bg-yellow" id="txtMembershipType" name="txtMembershipType" placeholder="">
                                                <option class="bg-yellow text-black" value="month">Monthly Membership</option>
                                                <option class="bg-black text-yellow" value="quarter">Quarterly Membership</option>
                                            </select>
                                        </div>
                                        <div class="form-row justify-content-around">
                                            <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="membershipAvail" id="membershipAvail" type="button" value='membershipAvail'>Avail Now!</div>
                                        </div>

                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <p class="mt-3 text-yellow textYellowHover" id="membershipLine">Still not a member! Want to become one?</p>
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



                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#bookYourRide">Book Your Ride</button>
                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#AccDetails">Account Details</button>

                                    <a href="logout.php">
                                        <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#Logout">Logout</button>
                                    </a>

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
                    <h5 class="modal-title">Update Your Profile</h5>
                    <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Profile-Customer-Process.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="hdn" name="hdn">
                        <input type="hidden" id="hdn1" name="hdn1">
                        <center>
                            <div class="form-group col-md-10">

                                <label for="txtName" class="text-yellow">
                                    Full Name

                                    <span id="checkrno" class="text-right text-white"></span></label>

                                <input type="text" class="form-control btn-br-normal" name="txtName" id="txtName" disabled value='<?php session_start(); echo $_SESSION["activeuser"];?>'>


                            </div>


                            <div class="form-group  col-md-10">
                                <label for="txtmail" class="text-yellow">Email address

                                    <small id="emailHelp" class="text-white"></small>
                                </label>
                                <input type="email" class="form-control btn-br-normal" id="txtmail" placeholder="Email" name="txtmail">

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

                            <div class="form-group col-md-10">
                                <label for="txtHostel" class="text-yellow ">Hostel
                                    <small id="errHostel" class="text-white"></small></label>
                                <select type="list" class="form-control bg-yellow" id="txtHostel" name="txtHostel" placeholder="Hostel Name">
                                    <option class="bg-yellow text-black" value="E">Hostel-E</option>
                                    <option class="bg-black text-yellow" value="G">Hostel-G</option>
                                    <option class="bg-yellow text-black" value="PG">Hostel-PG</option>
                                    <option class="bg-black text-yellow" value="I">Hostel-I</option>
                                    <option class="bg-yellow text-black" value="N">Hostel-N</option>
                                    <option class="bg-black text-yellow" value="M">Hostel-M</option>
                                    <option class="bg-yellow text-black" value="J">Hostel-J</option>
                                    <option class="bg-black text-yellow" value="B">Hostel-B</option>
                                    <option class="bg-yellow text-black" value="C">Hostel-C</option>
                                    <option class="bg-black text-yellow" value="K">Hostel-K</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="DrivLic" class="text-yellow ">Driving Licence
                                    </label>
                                    <input type="file" required name="DrivLic" id="DrivLic">
                                    <img src="images/IMG_0013.jpg" id="prev" width="150" height="150" alt="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="AadharCard" class="text-yellow ">Aadhar Card
                                    </label>
                                    <input type="file" required name="AadharCard" id="AadharCard">
                                    <img src="images/IMG_0013.jpg" id="prev1" width="150" height="150" alt="">
                                </div>
                            </div>
                            <div class="form-row justify-content-around">
                                <button type="submit" name="btn" class="btn btn-br-normal btn-black col-md-3 z-index_psv" id="btnsave" value="Save">Save</button>
                                <button type="submit" name="btn" class="btn btn-br-normal btn-black col-md-3 z-index_psv" id="btnUpdate" value="Update">Update</button>
                            </div>

                        </center>
                    </form>



                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#Cpass">Change Password</button>

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


    <div class="modal pb-4 pt-4 mt-4" tabindex="-1" role="dialog" id="Cpass">
        <div class="modal-dialog">
            <div class="modal-content bg-black br-yellow">
                <div class="modal-header bg-black text-yellow mb-4 p-2">
                    <h5 class="modal-title">Change Your Password</h5>
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
        <!--  ====================================================================================================      -->
        <!--                             Testing                       -->
        <div id="taskManager" class="modal bg-black fade" role="dialog">
            <div class="modal-dialog bg-black">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Task Manger
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">
                            &times;</button>

                    </div>
                    <div class="modal-body ">


                        <div id="taskTable" class="display_none" ng-init="loadWork();">
                            <table width="460" border="1">
                                <tr bgcolor="">
                                    <th>Sr.No</th>

                                    <th>Category</th>
                                    <th>Problem</th>

                                    <th>DOP</th>
                                    <th>REMOVE</th>
                                </tr>
                                <tr ng-repeat="obj in jsonArrayWork">
                                    <td>
                                        {{$index+1}}
                                    </td>

                                    <td>
                                        {{obj.category}}
                                    </td>
                                    <td>
                                        {{obj.problem}}
                                    </td>


                                    <td>
                                        {{obj.date}}
                                    </td>
                                    <td>
                                        <input value="Delete" type="button" ng-click="doDel(obj.rid);">
                                    </td>

                                </tr>
                            </table>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-black " data-dismiss="modal">
                            Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  ====================================================================================================      -->

    </div>



</body>

</html>
