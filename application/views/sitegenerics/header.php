<header class="top-header">
	<nav class="navbar navbar-expand">
		<div class="left-topbar d-flex align-items-center">
			<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
			</a>
		</div>
		<div class="flex-grow-1 search-bar">
		</div>
		<div class="right-topbar ml-auto">
			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user-profile">
					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
						<div class="media user-box align-items-center">
							<div class="media-body user-info">
								<p class="user-name mb-0">
									<input type="hidden" id="inspector_hidden_id" name="inspector_hidden_id" value="<?php echo $_SESSION['userinformation']->users_account_id; ?>">
									<?php 
										// if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation'])){
											echo "Welcome back <b>".$_SESSION['userinformation']->users_account_firstname."</b>";
										// }
									?>
								</p>
								<!-- <p class="designattion mb-0">Available</p> -->
							</div>
							<?php 
								if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_passport_tag != 'F'){?>
									<img src="<?php echo base_url() . 'userspicture/'.$_SESSION['userinformation']->users_account_id.".jpg"; ?>" id="uploadedImage" name="uploadedImage" class="user-img" alt="user avatar">                           									
								<?php }else{ ?>
									<img src="<?php echo base_url() . 'assets/images/avatars/avatar-1.png'; ?>" id="uploadedImage" name="uploadedImage" class="user-img" alt="user avatar">
								<?php } 
							?>									
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right">	
						<a class="dropdown-item" href="<?php echo base_url() .'admin/userprofile'; ?>">
							<i class="bx bx-user"></i><span>Profile</span>
						</a>
						<div class="dropdown-divider mb-0"></div>	
						<a class="dropdown-item" href="<?php echo base_url() .'admin/logout'; ?>">
							<i class="bx bx-power-off"></i><span>Logout</span>
						</a>
					</div>
				</li>
				<li class="nav-item dropdown dropdown-language">
				</li>
			</ul>
		</div>
	</nav>
</header>