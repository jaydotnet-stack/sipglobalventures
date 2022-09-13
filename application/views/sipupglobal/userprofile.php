<?php
	// print_r($_SESSION['userinformation']);
	// exit;
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:04 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>SIPUP||GLOBAL VENTURES</title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url() . 'assets/images/favicon-32x32.png'; ?>" type="image/png" />
	<!--plugins-->
	<link href="<?php echo base_url() . 'assets/plugins/simplebar/css/simplebar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'; ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . 'assets/plugins/metismenu/css/metisMenu.min.css'; ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url() . 'assets/css/pace.min.css'; ?>" rel="stylesheet" />
	<script src="<?php echo base_url() . 'assets/js/pace.min.js'; ?>"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/icons.css'; ?>" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/app.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-sidebar.css'; ?>" />
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/dark-theme.css'; ?>" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
        <?php 
            echo $sidebar;
        ?>
		<!--end sidebar-wrapper-->
		<!--header-->
        <?php 
            echo $header;
        ?>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">User Profile</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User Profile</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div> -->
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
                                <form id="user_profile_form" name="user_profile_form">   
                                    <div class="row">
                                        <div class="col-12 col-lg-7 border-right">
                                            <div class="d-md-flex align-items-center">
                                                <div class="mb-md-0 mb-3">
                                                <?php 
                                                    if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_passport_tag != 'F'){?>
                                                        <img src="<?php echo base_url() . 'userspicture/'.$_SESSION['userinformation']->users_account_id.".jpg"; ?>" id="uploadedImageX" name="uploadedImageX" class="rounded-circle shadow" width="130" height="130" alt="" />                                                       
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="uploadedImageX" name="uploadedImageX" class="rounded-circle shadow" width="130" height="130" alt="" />
                                                    <?php } 
                                                ?>                                                
                                                </div>
                                                <div class="ml-md-4 flex-grow-1">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h4 class="mb-0">
                                                            <?php 
                                                                // if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
                                                                    echo "Welcome back <b>".$_SESSION['userinformation']->users_account_firstname."</b>";
                                                                // }
                                                            ?>                                                        
                                                        </h4>
                                                        <!-- <p class="mb-0 ml-auto">$44/hr</p> -->
                                                    </div>
                                                    <p class="mb-0 text-muted">[
                                                        <?php 
                                                            // if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
                                                                echo $_SESSION['userinformation']->users_account_category."</b>";
                                                            // }
                                                        ?>  ]
                                                    </p>
                                                    <!-- <p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p>
                                                    <button type="button" class="btn btn-primary">Connect</button>
                                                    <button type="button" class="btn btn-outline-secondary ml-2">Resume</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <div class="form-group" id='img'>
                                                <label>Change Picture</label>
                                                <input type="file" name="userfile" id="userfile" required="true" onchange="preveiwImage(this)" class="form-control">
                                            </div>                                        
                                            <!-- <table class="table table-sm table-borderless mt-md-0 mt-3">
                                                <tbody>
                                                    <tr>
                                                        <th>Availability:</th>
                                                        <td>Full-time (40hr/wk) <span class="badge badge-success">available</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Age:</th>
                                                        <td>27</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Location:</th>
                                                        <td>Sankt, Petersburg, Russia</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Years experience:</th>
                                                        <td>6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="mb-3 mb-lg-0"> <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-github'></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-twitter'></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-facebook'></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-linkedin'></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-dribbble'></i></a>
                                                <a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-stack-overflow'></i></a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <ul class="nav nav-pills">
                                        <!-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Edit-Profile"><span class="p-tab-name">Edit Profile</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
                                        </li> -->
                                        <!-- <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#Experience"><span class="p-tab-name">Experience</span><i class='bx bx-donate-blood font-24 d-sm-none'></i></a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Biography"><span class="p-tab-name">Biography</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
                                        </li>                                     -->
                                    </ul>
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show active" id="Edit-Profile">
                                            <div class="card shadow-none border mb-0 radius-15">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-5 border-right">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>First Name</label>
                                                                        <input type="text" id="firstname" name="firstname" class="form-control"
                                                                            value="<?php echo $_SESSION['userinformation']->users_account_firstname; ?>">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Last Name</label>
                                                                        <input type="text" id="lastname" name="lastname"  class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_lastname; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $_SESSION['userinformation']->email; ?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Phone</label>
                                                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_phone_number; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" id="address" name="address" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_address; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-7">
                                                                <div class="form-group">
                                                                    <label>Date of Birth</label>
                                                                    <input type="date" id="dob" name="dob" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_dob; ?>">
                                                                </div>                                                            
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Gender</label>
                                                                        <select id="gender" name="gender"class="form-control">
                                                                            <?php 
                                                                                if($_SESSION['userinformation']->users_account_sex == "male"){?>
                                                                                    <option value="male" selected>Male</option>
                                                                                    <option value="female">Female</option>
                                                                                <?php }else{ ?>
                                                                                    <option value="male">Male</option>
                                                                                    <option value="female" selected>Female</option>
                                                                                <?php }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>User Category</label>
                                                                        <input type="text" id="user_category" name="user_category" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_category; ?>" disabled>
                                                                    </div>                                                                
                                                                </div>


                                                                <div class="form-group">
                                                                    <label>Market Location/Axis</label>
                                                                    <input type="text" id="market_location" name="market_location" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_market_location; ?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>LGA</label>
                                                                    <input type="text" id="lga" name="lga" class="form-control" value="<?php echo $_SESSION['userinformation']->users_account_lga; ?>">
                                                                </div>
                                                                <!-- <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Twitter</label>
                                                                        <input type="text" class="form-control" value="https://twitter.com/anyukova">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label>Facebook</label>
                                                                        <input type="text" class="form-control" value="https://www.facebook.com/anyukova">
                                                                    </div> 
                                                                </div> -->
                                                                <hr>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                    <button type="button" id="btn_view_update_profilex" name="btn_view_update_profilex" class="btn btn-primary px-5 radius-30">Update</button>
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                        <!-- <div class="tab-pane fade " id="Experience">
                                            <div class="card shadow-none border mb-0 radius-15">
                                                <div class="card-body">
                                                    <div class="d-sm-flex align-items-center mb-3">
                                                        <h4 class="mb-0">Job Experience</h4>
                                                        <p class="mb-0 ml-sm-3 text-muted">3 Job History</p> <a href="javascript:;" class="btn btn-primary ml-auto radius-10"><i class='bx bx-plus'></i> Add More</a>
                                                    </div>
                                                    <div class="media"> <i class='bx bxl-dribbble media-icons bg-dribbble'></i>
                                                        <div class="media-body ml-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-4">
                                                                    <h5 class="mb-0">Graphic Designer</h5>
                                                                    <p class="mb-0">Dribbble Inc</p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h5 class="text-muted mb-0"><i class='bx bx-time'></i> Feb-2017-Dec-2017</h5>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h5 class="text-muted mb-0"><i class='bx bxs-map'></i> New York, USA</h5>
                                                                </div>
                                                            </div>
                                                            <p class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                                                            <h6>Media Files(2)</h6>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-3">
                                                                    <img src="assets/images/gallery/35.jpg" class="img-thumbnail" alt="">
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <img src="assets/images/gallery/36.jpg" class="img-thumbnail" alt="">
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <img src="assets/images/gallery/37.jpg" class="img-thumbnail" alt="">
                                                                </div>
                                                                <div class="col-12 col-lg-3">
                                                                    <img src="assets/images/gallery/38.jpg" class="img-thumbnail" alt="">
                                                                </div>
                                                            </div>
                                                            <hr/>
                                                        </div>
                                                    </div>
                                                    <div class="media"> <i class='bx bxs-diamond media-icons bg-warning'></i>
                                                        <div class="media-body ml-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-4">
                                                                    <h5 class="mb-0">Lead Designer</h5>
                                                                    <p class="mb-0">Sketch App</p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h5 class="text-muted mb-0"><i class='bx bx-time'></i> Apr-2011-Sep-2013</h5>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <h5 class="text-muted mb-0"><i class='bx bxs-map'></i> Sydney, Australia</h5>
                                                                </div>
                                                            </div>
                                                            <p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Biography">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card shadow-none border mb-0">
                                                        <div class="card-body">
                                                            <h5 class="mb-3">Websites</h5>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <p class="mb-0"><i class='bx bx-globe'></i> Website: <a href="javascript:;">svetlananyukova.com</a>
                                                                </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p class="mb-0"><i class='bx bxl-blogger'></i> Blog: <a href="javascript:;">blog.svetlananyukova.com</a>
                                                                </p>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <p class="mb-0"><i class='bx bx-images'></i> Portfolio: <a href="javascript:;">svetlananyukova.com/portfolio</a>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="card shadow-none border mb-0 radius-15">
                                                        <div class="card-body">
                                                            <h5 class="mb-3">About</h5>
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                                            <hr>
                                                            <h5 class="mb-3">Skills</h5>
                                                            <div class="chip">UI Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">android <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">iOS <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">python <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">javascript <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">sketch <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">photoshop <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">Html5 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">bootstrap4 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">jQuery <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">php Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">ms excel <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <div class="chip">programming <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
                                                            </div>
                                                            <h5 class="mb-3">Language</h5>
                                                            <hr>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item"><i class="flag-icon flag-icon-um mr-2"></i><span>English</span>
                                                                </li>
                                                                <li class="list-inline-item"><i class="flag-icon flag-icon-fr mr-2"></i><span>French</span>
                                                                </li>
                                                                <li class="list-inline-item"><i class="flag-icon flag-icon-de mr-2"></i><span>German</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
        <?php 
            echo $footer;
        ?>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
    <?php 
        echo $switcher;
    ?>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url() . 'assets/plugins/simplebar/js/simplebar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/metismenu/js/metisMenu.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'; ?>"></script>
	<!-- App JS -->
	<script src="<?php echo base_url() . 'assets/js/app.js'; ?>"></script>
	<?php 
		echo $custom_js; 
	?>  
	<script>
		$(document).ready(function(){
			$("#firstname").focus();
            $("#btn_view_update_profilex").click(function(){
                var formdata = new FormData($("#user_profile_form")[0]);
                $.ajax({
                    url: baseUrl + "admin/updateuserprofile",
                    type: 'POST',
                    data: formdata,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data){ 
                        if(data == -1){
                            alert("Unable to update profile");
                        }else if(data == 0){
                            alert("Record does not exist");
                        }else{
                            alert("Profile successfully updated");
                            $("#uploadedImage").attr('src', baseUrl + 'userspicture/' + data + '.jpg' + `?v=${new Date().getTime()}`);      
                            $("#uploadedImageX").attr('src', baseUrl + 'userspicture/' + data + '.jpg' + `?v=${new Date().getTime()}`);                                
                            //location.reload();   
                        }
                    }
                });        
            });
		});
    </script>      
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Jan 2021 15:12:10 GMT -->
</html>