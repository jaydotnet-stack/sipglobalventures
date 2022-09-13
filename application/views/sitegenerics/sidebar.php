<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="<?php echo base_url() . 'assets/images/logo-icon.png'; ?>" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h6 class="logo-text"><?php echo 'SIP||UP'; ?></h6>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Main</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-cog bx-spin"></i>Operations</a>
                    <ul>
                        <?php 
                            if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_approval_status == "T"){?>
                                <li> <a class="has-arrow" href="javascript:;"><i class="lni lni-book"></i>Setup(s)</a>
                                    <?php
                                        if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_category == "Gmanager"){?>
                                            <ul>
                                                <li> <a href="<?php echo base_url().'admin/accountingyear'; ?>"><i class="bx bx-calendar-check"></i>Accounting Year</a>
                                                </li>
                                            </ul>
                                    
                                            <ul>
                                                <li> <a href="<?php echo base_url().'admin/marketlocation'; ?>"><i class="fadeIn animated bx bx-location-plus"></i>Market Location</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li> <a href="<?php echo base_url().'admin/allocateusertomarket'; ?>"><i class="fadeIn animated bx bx-user-pin"></i>Allocate Users to Market</a>
                                                </li>
                                            </ul>                                    
                                            <ul>
                                                <li> <a href="<?php echo base_url().'admin/loancategories'; ?>"><i class="lni lni-agenda"></i>Loan Categories(s)</a>
                                                </li>
                                            </ul>
                                    <?php } ?>                                                
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/contributionapplicationprocess'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Process Contribution</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/startcontribution'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Start Contribution</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/loanapplicationprocess'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Process Loan</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/loansetupformfee'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Loan Setup Fee</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/disburseloan'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Disburse Loan</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/reinbursesystem'; ?>"><i class="fadeIn animated bx bx-rotate-right"></i>Cashier Reinburse System</a>
                                        </li>
                                    </ul>
                                </li>
                        <?php } ?>
                        <?php 
                            if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_approval_status == "T"){?>                         
                                <li> <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-task"></i>Repayment(s)</a>
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/loanweeklyrepaymentbyinspector'; ?>"><i class="lni lni-dollar"></i>Loan Weekly</a>
                                        </li>   
                                    </ul>                                    
                                    <ul>
                                        <li> <a href="<?php echo base_url().'admin/dailycontributionbyinspector'; ?>"><i class="lni lni-dollar"></i>Contributions Daily</a>
                                        </li>
                                    </ul>
                                </li>                            
                        <?php }?>

                        <li> 
                            <a class="has-arrow" href="javascript:;"><i class="fadeIn animated bx bx-user"></i>Account(s)</a>
                            <?php 
                                if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_category == "Gmanager" && $_SESSION['userinformation']->users_account_approval_status == "T"){?>
                                    <ul>
                                        <li> <a href="<?php echo base_url(). 'admin/createaccount'; ?>"><i class="fadeIn animated bx bx-user-plus"></i>Create/Update Account</a>
                                        </li>
                                    </ul>
                            <?php } ?>
                            <ul>
                                <li> <a href="<?php echo base_url(). 'admin/userprofile'; ?>"><i class="bx bx-user-circle"></i>User Profile</a>
                                </li>
                            </ul>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/logout'; ?>"><i class="bx bx-power-off"></i>Logout</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li> 
                            <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Defaulter</a>
                            <ul>
                                <li> <a href="<?php echo base_url(). 'admin/postday25th'; ?>"><i class="fadeIn animated bx bx-task"></i>Post Day-25th</a>
                                </li>
                            </ul>
                            <ul>
                                <li> <a href="<?php echo base_url().'admin/logout'; ?>"><i class="bx bx-power-off"></i>Logout</a>
                                </li>
                            </ul>
                        </li> -->

                        <?php 
                            if(isset($_SESSION['userinformation']) && !empty($_SESSION['userinformation']) && $_SESSION['userinformation']->users_account_approval_status == "T"){?>                         
                            <li> 
                                <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Defaulters</a>
                                <ul>
                                    <li> <a href="<?php echo base_url(). 'admin/postday25th'; ?>"><i class="fadeIn animated bx bx-task"></i>Post Day-25th</a>
                                    </li>
                                </ul>
                                <ul>
                                    <!-- <li> <a href="<?php echo base_url().'admin/logout'; ?>"><i class="bx bx-power-off"></i>Logout</a> -->
                                    </li>
                                </ul>
                            </li>                           
                        <?php }?>

                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-label">Others</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="lni lni-plus"></i>
                </div>
                <div class="menu-title">Addendum</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>----</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>----</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>