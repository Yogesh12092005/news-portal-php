<!-- <form method="post" action="<?php echo site_url('homecontroller/updatepassword'); ?>">
    <h3>Reset Password</h3>

    <input type="password" name="password"
           placeholder="New Password" required>

    <input type="password" name="cpassword"
           placeholder="Confirm Password" required>

    <button type="submit">Reset Password</button>
</form> -->


<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/forgotpass.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title> News Admin Dashboard </title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login2.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
					<div class="card card-signup">
						
					<form class="form" method="post" action="<?php echo site_url('homecontroller/updatepassword'); ?>">
    						<div class="header header-primary text-center">
								<h4>Forgot Password?</h4>
							</div>

							<p class="text-muted p-15">
								Enter your New password.
							</p>

							<div class="content">
								<div class="form-group">
									 <input type="password" name="password" class="form-control underline-input" placeholder="New Password" required>
								</div>
							</div>

                            <div class="content">
                                <div class="form-group">
                                     <input type="password" name="cpassword" class="form-control underline-input" placeholder="Confirm Password" required>
                                </div>
                            </div>

							<div class="footer text-center mb-20">
								<!-- ✅ button instead of anchor -->
								<button type="submit" class="btn btn-info btn-raised">Reset Password</button>
							</div>
                             <a href="<?php echo site_url('homecontroller/forget');?>">Back to Forget</a> | 
   							 <a href="<?php echo site_url('homecontroller'); ?>">Back to Login</a>
					</form>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-12 text-center mt-20"> <a href="login.html" class="text-uppercase text-white">Back</a> </div> -->
				</div>
			</div>
		</footer>
	</div>
</div>
<!--  Vendor JavaScripts --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/forgotpass.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
</html>
