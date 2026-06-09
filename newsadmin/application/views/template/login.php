
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:15 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title> News - Admin Dashboard </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login2.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              
              <div class="header header-primary text-center">
                <h4>Sign in</h4>
                <div class="social-line">
                  <a href="javascript:void(0);" class="btn btn-just-icon">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a  href="javascript:void(0);" class="btn btn-just-icon">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="javascript:void(0);" class="btn btn-just-icon">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              
                <div class="form-group">

                    <select class="form-control underline-input" name="role"  required onchange="showlogin(this.value)">
                    <center><option value="" disabled selected>Select Role</option></center>
                      <option value="admin">Login As Admin</option>
                      <option value="reporter">Login As Reporter</option>
                    </select>
                  </div>
         

              <!-- Admin Login -->
              <form class="form" id="adminlogin" style="display: none;" method="post" action="<?php echo site_url() ?>/homecontroller/checklogin">

                <h3 class="mt-0">Admin</h3>
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="Aemail" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" placeholder="Password..." class="form-control underline-input">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> Remember me</label>
                  </div>
                </div>
                <div class="footer text-center">
                  <!-- <a href="index-2.html" class="btn btn-info btn-raised">Login</a> -->
                   <button type="submit" class="btn btn-info btn-raised">Login</button>
                </div>
                <a href="<?php echo site_url() ?>/homecontroller/forget" class="btn btn-wd" >Forgot Password?</a>
              </form>



              
              <!-- Reporter Login -->
              <form class="form" id="reporterlogin" style="display:none" method="post" action="<?php echo site_url() ?>/homecontroller/checkreplogin">
                <h3 class="mt-0">Reporter Login</h3>
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="remail" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="rpassword" placeholder="Password..." class="form-control underline-input">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> Remember me</label>
                  </div>
                </div>

                <div class="footer text-center">
                  <!-- <a href="index-2.html" class="btn btn-info btn-raised">Login</a> -->
                   <button type="submit" class="btn btn-info btn-raised">Login</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
            <!-- <a href="signup.html" class="text-uppercase text-white">Create an account</a> -->
            <!-- <div class="copyright text-white mt-20"> &copy; 2017, made with
              <i class="fa fa-heart heart"></i> by
              <a href="http://thememakker.com/" target="_blank">Theme Makker</a>
            </div> -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--  Vendor JavaScripts -->

  <script>
    function showlogin(role)
    {
      if(role=='admin')
      {
        document.getElementById('adminlogin').style.display='block';
        document.getElementById('reporterlogin').style.display='none';
      }
      else if(role=='reporter')
      {
        document.getElementById('reporterlogin').style.display='block';
        document.getElementById('adminlogin').style.display='none';
      }
}
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:15 GMT -->
</html>