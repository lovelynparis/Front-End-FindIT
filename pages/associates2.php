<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../lib/dist/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../lib/dist/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="../lib/custom/css/all.css">
    <link rel="stylesheet" href="../lib/dist/animate/animate.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../lib/dist/datatable/dataTables.bootstrap4.min.css">

    <!-- jquery validation -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

    <!-- jquery editable dropdown plugin -->
    <link href="https://rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">

    <!-- Your custom css goes here -->
    <link rel="stylesheet" href="../lib/custom/css/custom.css">

    <title>Associates</title>
</head>

<body>
    <div class="fluid-container">
        <div class="wrapper">
            <nav id="sidebar">
                <!-- Sidebar Toggle Button -->
                <div class="sidebar-header sidebar-sticky">
                    <button type="button" id="sidebarCollapse" class="btn btn-info float-right">
                        <i class="fas fa-chevron-left"></i>
                        <span></span>
                    </button>
                </div>

                <!-- Sidebar User Info -->
                <div class="sidebar-user"></div>

                <!-- Menu List -->
                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="fas fa-chart-line"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-warehouse"></i>
                            <span class="hide-menu">Inventory</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span class="hide-menu">Associates</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-hand-holding"></i>
                            <span class="hide-menu">Issuance</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-desktop"></i>
                            <span class="hide-menu">Issuable Items</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-exclamation-circle"></i>
                            <span class="hide-menu">Inventory Concerns</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-list-alt"></i>
                            <span class="hide-menu">Activity Logs</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fas fa-file-export"></i>
                            <span class="hide-menu">Generate Reports</span>
                        </a>
                    </li>
                    <!-- Submenu -->
                    <!-- <li>
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <i class="fas fa-home"></i>
                                    <span class="hide-menu">Home</span>
                                </a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a href="#">Home 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 3</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-briefcase"></i>
                                    About
                                </a>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <i class="fas fa-copy"></i>
                                    Pages
                                </a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">Page 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Page 3</a>
                                    </li>
                                </ul>
                            </li> -->
                </ul>
            </nav>
            <div id="content">
                <!-- Top Navigation Bar -->
                <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
                    <ul class="navbar-nav pr-4">
                        <li class="nav-item">
                            <div class="navbar-header">
                                <!-- Needs logo -->
                                <a class="navbar-brand">FindIT</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        </li>
                    </ul>

                    <div class="d-flex flex-row-reverse bd-highlight settings">
                        <div class="p-2 bd-highlight">
                            <a class="fas fa-ellipsis-v" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <button class="dropdown-item dropdown-item-custom" data-toggle="modal" data-target="#profile-modal"><span class="fas fa-user-circle icon"></span>View Profile</button>
                                <button class="dropdown-item dropdown-item-custom"><span class="fas fa-sign-out-alt icon"></span>Logout</button>
                            </div>
                        </div>
                        <div class="p-2 bd-highlight name">JOHN DOE</div>
                        <div class="p-2 bd-highlight">
                            <div class="profile-pic">
                                <img src="../assets/images/user/user.png" class="img-avatar" alt="avatar" srcset="">
                            </div>
                        </div>
                    </div>
                </nav>

                <!--View Profile-->
                <div class="modal fade" id="profile-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg row">
                        <div class="modal-content">
                            <div class="modal-body row" style="padding: 0 !important; height: 37rem;">
                                <div class="col col-4" style="background: #555555;">
                                    <hr style="color: #FDAD4E; background: #FDAD4E; height: 1px; margin-top: 4.5rem;">
                                    <div class="profile-pic text-center" style="margin-top: 2.5rem; margin-bottom: 5px;">
                                        <img src="../assets/images/user/user.png" class="img-avatar" alt="avatar" srcset="" style="width: 5rem; height: 5rem; border-width: 2px;">
                                    </div>
                                    <div class="text-center" style="color: white; font-size: 18px; margin-bottom: 0 !important;">John Doe
                                        <p style="">ADMIN</p>
                                    </div>
                                    <hr style="color: #FDAD4E; background: #FDAD4E; height: 1px;">
                                    <div class="">
                                    </div>
                                </div>
                                <div class="col col-8" style="padding: 1rem;">
                                    <div class="" style="margin-top: 1rem; margin-left: 1rem;">
                                        <span class="fas fa-times-circle" data-dismiss="modal" aria-label="Close" aria-hidden="true"></span>
                                        <h5 class="account-settings">Account Settings</h5>
                                        <hr style="color: #FDAD4E; background: #FDAD4E; height: 1px; margin-right: 2rem;">
                                    </div>
                                    <div class="" style="margin-left: 1rem; margin-right: 2rem;">
                                        <form class="profile-form" id="profile-form">
                                            <!--name-->
                                            <div class="" id="divname">
                                                <div class="row row-details">
                                                    <div class="col col-4 detail-header">NAME</div>
                                                    <div class="col col-7 details" id="fullname">John Doe</div>
                                                    <div class="col col-1 edit" id="name-edit"><u>Edit</u></div>
                                                </div>
                                                <div class="display" id="name" style="background: #CCCCCC; padding: 1rem;">
                                                    <div class="margin row">
                                                        <div class="form-group col col-6">
                                                            <label for="label" class="col-form-label label">First Name</label>
                                                            <input type="text" class="form-inline input">
                                                        </div>
                                                        <div class="form-group col col-6">
                                                            <label for="label" class="col-form-label label">Last Name</label>
                                                            <input type="text" class="form-inline input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Department-->
                                            <div id="divdepartment">
                                                <div class="row row-details">
                                                    <div class="col col-4 detail-header">DEPARTMENT</div>
                                                    <div class="col col-7 details" id="department-info">IT Department</div>
                                                    <div class="col col-1 edit" id="department-edit"><u>Edit</u></div>
                                                </div>
                                                <!--department collapse-->
                                                <div class="display" id="department" style="background: #CCCCCC; padding: 1rem;">
                                                    <div class="margin">
                                                        <div class="form-group row">
                                                            <select class="exampleFormControlSelect1 select">
                                        <option></option>
                                        <option value="dept1">IT Department</option>
                                        <option value="dept2">Department 2</option>
                                        <option value="dept3">Department 3</option>
                                        <option value="dept4">Department 4</option>
                                      </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Email-->
                                            <div id="divemail">
                                                <div class="row row-details">
                                                    <div class="col col-4 detail-header">EMAIL</div>
                                                    <div class="col col-7 details" id="email-add">john_doe@nms.ph</div>
                                                    <div class="col col-1 edit" id="email-edit"><u>Edit</u></div>
                                                </div>
                                                <!--email collapse-->
                                                <div class="text-center display remove-padding" id="email" style="background: #CCCCCC; padding: 1rem;">
                                                    <div class="margin">
                                                        <div class="form-group row">
                                                            <div class="col col-2">
                                                                <label for="label" class="col-form-label label">Email</label>
                                                            </div>
                                                            <div class="col col-10">
                                                                <input type="email" name="inputEmail" class="form-inline input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--password-->
                                            <div id="divpassword">
                                                <div class="row row-details">
                                                    <div class="col col-4 detail-header">PASSWORD</div>
                                                    <div class="col col-7 details" id="password-info">***********</div>
                                                    <div class="col col-1 edit" id="password-edit"><u>Edit</u></div>
                                                </div>
                                                <!--password modal-->
                                                <div class="text-center display remove-padding" id="password" style="background: #CCCCCC; padding: 1rem;">
                                                    <div class="margin">
                                                        <div class="form-group row">
                                                            <div class="col col-4">
                                                                <label for="" class="col-form-label label">Old Password</label>
                                                            </div>
                                                            <div class="col col-8">
                                                                <input type="password" class="form-inline input" id="" name="oldPassword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margin">
                                                        <div class="form-group row">
                                                            <div class="col col-4">
                                                                <label for="" class="col-form-label label">New Password</label>
                                                            </div>
                                                            <div class="col col-8">
                                                                <input type="password" class="form-inline input" id="" name="newPassword">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margin">
                                                        <div class="form-group row">
                                                            <div class="col col-4">
                                                                <label for="" class="col-form-label label">Repeat Password</label>
                                                            </div>
                                                            <div class="col col-8">
                                                                <input type="password" class="form-inline input" id="" name="repeat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center display" id="cancel-save">
                                                    <button type="button" class="btn btn-danger b password-cancel cancel" id="buttons" name="">Cancel</button>
                                                    <button type="button" class="btn btn-success b cancel" id="buttons">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <!-- <div class="breadcrumbs"> -->
                <nav class="navbar navbar-light bg-light yellow-divider">
                    <!-- <span class="navbar-brand mb-0 h2 title"> -->
                    <!-- <i class="fas fa-chart-line"></i>Dashboard -->
                    <!-- </span> -->
                    <!-- </nav> -->

                    <!-- Page Content -->
                    <div class="container p-lg-2 p-md-1 p-sm-0">
                        <div class="container">

                            <!-- Toolbox -->
                            <div class="d-flex flex-row-reverse">
                                <div class="p-2">

                                    <!-- Add Associate Modal -->
                                    <div class="modal fade" id="addAssociate" tabindex="-1" role="dialog" aria-labelledby="addAssociateTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div id="addAssociateHeader" class="modal-header">
                                                    <h5 class="modal-title" id="ModalTitle"><i class="fas fa-user-plus"></i>&nbsp;Add Associate</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">

                                                        <div class="col">
                                                            <form>
                                                                <label class="label">Name: </label>
                                                                <br>
                                                                <input type="text" name="search_employee" id="search_employee" placeholder="search by employee name" size="35"><br>
                                                            </form>
                                                        </div>



                                                    </div>


                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="label">Department: </label>
                                                            <br> Information Technology Development Department
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="label">Details </label>
                                                            <br>
                                                            <div class="container">

                                                              
                                       <input type="hidden" name="hidden_name" id="hidden_name" />
                                                                <div style="clear:both"></div>
                                                                <br>

                                                                <div class="table-responsive">
                                                                    <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Family Name</th>
                                                                                <th>Last Name</th>
                                                                                <th>Email</th>
                                                                               
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="tbodyname">
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>



                                                                <!--
                                                                <table style="width:100%">
                                                                    <tr>
                                                                        <th>Firstname</th>
                                                                        <th>Lastname</th>
                                                                        <th>Email</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Null</td>
                                                                        <td>Null</td>
                                                                        <td>Null</td>
                                                                    </tr>

                                                                </table>
-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="result"></div>




                                                </div>
                                                <div class="modal-footer">
                                                    <button id="save" type="button" class="btn btn-success" data-dismiss="modal" data-toggle="modal" href="#successAssociate"> <span class="fas fa-save"></span>    SAVE</button>
                                                    <button id="cancel" type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Modal Associate successfully added!-->
                                    <div class="modal fade" id="successAssociate" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div id="successAssociate" class="modal-header">
                                                    <h5 class="modal-title" id="ModalTitle"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <i id="successIcon" class="far fa-check-circle fa-10x"></i>
                                                    <p id="successText">Associate successfully added!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="okSuccessButton" type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--- Failed To Add Associate Modal Design --->
                                    <!-- Modal -->
                                    <div class="modal fade" id="failedModal" tabindex="-1" role="dialog" aria-labelledby="failedModalTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div id="failedHeader" class="modal-header">
                                                    <h5 class="modal-title" id="ModalTitle"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <i id="failedIcon" class="far fa-times-circle fa-10x"></i>
                                                    <p id="failedText">Failed to add Associate!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="retryFailedButton" type="button" class="btn btn-danger" data-dismiss="modal">RETRY</button>
                                                    <button id="okFailedButton" type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <!-- Associate tools ADD EDIT DELETE-->
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAssociate" style="padding-left: 15px;"><span class="fas fa-user-plus" data-toggle="tooltip" title="Add Associate" ></span>Add Associate</button>
                                        <!--   <button type="button" class="btn" data-toggle="modal" data-target="#"><span class="fas fa-user-edit" data-toggle="tooltip" title="Edit Associate"></span></button>-->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#"><span class="fas fa-user-minus" data-toggle="tooltip" title="Remove Associate"></span>Remove Associate</button>
                                    </div>



                                </div>
                            </div>



                            <table id="myDataTable" class="table table-borderless table-striped table-hover table-responsive" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>Jon Paulo Faypon</td>
                                        <td>twistafries@gmail.com</td>
                                        <td>Information Technology Development Department</td>
                                        <td>active</td>
                                        <td>
                                            <button class="btn btn-secondary" id="deactivate">Deactivate</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Gavin Roy Ferrer</td>
                                        <td>gavinroy@gmail.com</td>
                                        <td>Information Technology Development Department</td>
                                        <td>inactive</td>
                                        <td>
                                            <button class="btn btn-secondary" id="deactivate">Activate</button>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>




                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- JQuery Core -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../lib/dist/jquery/dist/jquery.min.js"></script>
    <!--JQuery form validation plugin-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!--JQuery editable table plugin-->
    <script src="https://rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
    <script type="text/javascript" src="../lib/dist/popper/popper.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="../lib/dist/bootstrap/js/bootstrap.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../lib/dist/datatable/dataTables.bootstrap4.min.css">
    <script src="../lib/dist/datatable/jquery.dataTables.min.js"></script>
    <script src="../lib/dist/datatable/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                var icon = $(this).parent().find(".fas")
                if (icon.hasClass('fas fa-chevron-left'))
                    icon.removeClass('fas fa-chevron-left').addClass("fas fa-chevron-right");
                else
                    icon.removeClass('fas fa-chevron-right').addClass("fas fa-chevron-left");
            });
        });

    </script>
    <script>
        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });

        $.validator.addMethod("passwordcheck", function(value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    &&
                    /[a-z]/.test(value) // has a lowercase letter
                    &&
                    /\d/.test(value) // has a digit
            },
            'Password must consist of uppercase, lowercase, number, and a special character ()');

        $("#profile-form").validate({
            rules: {
                oldPassword: {
                    required: true,
                    passwordcheck: true,
                    maxlength: 15,
                },

                newPassword: {
                    required: true,
                    passwordcheck: true,
                    maxlength: 15,
                    minlength: 8,
                },

                repeat: {
                    required: true,
                    equalTo: "inputNew",
                    minlength: 8,
                },

                inputEmail: {
                    email: true,
                    maxlength: 30,
                    minlength: 11,
                },
            },
        });

    </script>
    <script>
        $(document).ready(function() {
            $.fn.showInfo = function(elementsHideID, elementsShowID) {
                $("#" + elementsHideID + " > .display").show();
                $.each(elementsShowID, function(index, value) {
                    $("#" + value + " > .display").hide();
                });
            }

            $("#divname .edit").click(function() {
                $.fn.showInfo("divname", ["divdepartment", "divemail", "divpassword"]);
                $("#cancel-save").show();
                $(".password-cancel").click(function() {
                    $("#name").hide();
                    $("#cancel-save").hide();
                });
            });

            $("#divdepartment .edit").click(function() {
                $.fn.showInfo("divdepartment", ["divname", "divemail", "divpassword"]);
                $("#cancel-save").show();
                $(".password-cancel").click(function() {
                    $("#department").hide();
                    $("#cancel-save").hide();
                });
            });

            $("#divemail .edit").click(function() {
                $.fn.showInfo("divemail", ["divname", "divdepartment", "divpassword"]);
                $("#cancel-save").show();
                $(".password-cancel").click(function() {
                    $("#email").hide();
                    $("#cancel-save").hide();
                });
            });

            $("#divpassword .edit").click(function() {
                $.fn.showInfo("divpassword", ["divname", "divdepartment", "divemail"]);
                $("#cancel-save").show();
                $(".password-cancel").click(function() {
                    $("#password").hide();
                    $("#cancel-save").hide();
                });
            });
        });
        //   //name
        //   $("#name-edit").click(function(){
        //     $("#fullname").hide();
        //     $("#name-edit").hide();
        //     $("#name").show();
        //   });
        //   $(".name-cancel").click(function(){
        //     $("#name").hide();
        //     $("#fullname").show();
        //     $("#name-edit").show();
        //   });
        //
        //   //department
        //   $("#department-edit").click(function(){
        //     $("#department-info").hide();
        //     $("#department-edit").hide();
        //     $("#department").show();
        //   });
        //   $(".department-cancel").click(function(){
        //     $("#department").hide();
        //     $("#department-info").show();
        //     $("#department-edit").show();
        //   });
        //
        //   //email
        //   $("#email-edit").click(function(){
        //     $("#email-add").hide();
        //     $("#email-edit").hide();
        //     $("#email").show();
        //   });
        //   $(".email-cancel").click(function(){
        //     $("#email").hide();
        //     $("#email-add").show();
        //     $("#email-edit").show();
        //   });
        //
        //     //password
        //   $("#password-edit").click(function(){
        //     $("#password-info").hide();
        //     $("#password-edit").hide();
        //     $("#password").show();
        //   });
        //   $(".password-cancel").click(function(){
        //     $("#password").hide();
        //     $("#password-info").show();
        //     $("#password-edit").show();
        //   });
        // });

    </script>
    <script>
        var table = $('table').DataTable({
            scrollY: '50vh',
            scrollCollapse: true,
            // scrollX: '100vw',        

            'ajax': '',
            'select': 'multi',
            'order': [
                [1, 'asc']
            ],

            'columnDefs': [{
                'targets': 0,
                'render': function(data, type, row, meta) {

                    return data;
                },
            }]

        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

    </script>
    <script>
        $(document).ready(function() {

            load_data();

            function load_data(query = '') {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('tbodyname').html(data);
                    }
                })
            }

          

        });

    </script>
</body>

</html>
