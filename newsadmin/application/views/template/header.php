<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:03 GMT -->
<head>
<meta charset="utf-8">

<title> Admin Dashboard </title>
<link rel="icon" type="image/ico" href="<?php echo base_url() ?>assets/images/NewsLogo.png" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">


</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header" >
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a >
                        <img src="<?php echo base_url() ?>assets/images/NewsLogo.png" alt="" class="size-50x50">
                       <span style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 600; color: #5a5a5a; ">
                            Quick News
                        </span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                  
                    
                </ul>
              

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                       
                        <img src="<?php echo base_url() ?>assets\images\random-avatar3.jpg" alt="" class="0 size-30x30"> </a>

                            <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">
                                        <?php echo $this->session->userdata('Aname'); ?>
                                    </div>
                                    <div class="user-position online">Available</div>
                                </div>
                            </li>
                            <li>
                                <a href="profile.html" role="button" tabindex="0">
                                    <span class="label label-success pull-right">80%</span>
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                          
                            <li>
                                <a href="<?php echo site_url() ?>/homecontroller/logout" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="toggle-right-leftmenu">
                        <a role="button" tabindex="0">
                            <i class="fa fa-align-left"></i>
                        </a>
                    </li> -->
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>
        <!--/ HEADER Content  -->