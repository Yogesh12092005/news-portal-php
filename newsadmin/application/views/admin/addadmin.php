<!-- CONTENT -->
		<section id="content">
			<div class="page page-forms-validate">
				<!-- bradcome -->
				<div class="bg-light lter b-b wrapper-md mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Admin Registration Form</h1>
							<!-- <small class="text-muted">Welcome to Falcon application</small> -->
						</div>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Add</strong> Admin</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" enctype="multipart/form-data" name="form4" role="form" id="form4" method="post" action="<?php echo site_url() ?>/admincontroller/insadmin" data-parsley-validate>
						
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Admin Name</label>
										<div class="col-sm-9">
											<input type="text" name="Aname" class="form-control" placeholder="Admin Name" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

									 <div class="form-group">
										<label class="col-sm-3 control-label">Full Name</label>
										<div class="col-sm-9">
											<input type="text" name="fullname" class="form-control" placeholder="Full Name" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
						

                                    <div class="form-group">
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<input type="text" name="Aemail" class="form-control" placeholder="Email" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
                        

                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                    <input type="password" name="password" class="form-control" placeholder="password" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />
                        


                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                     
                                        <div class="col-sm-offset-2 col-sm-10 checkbox">
                                        <label>
                                        <input type="radio" name="gender" value="male">male</label>
                                       <label>
                                        <input type="radio" name="gender" value="female">female</label>
                                      
                                    </div>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />
        
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" class="form-control" placeholder="address" data-parsley-trigger="change" required>
                                        </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />

                                    
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact No</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="contactno" class="form-control" placeholder="Contact No" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />

									 <div class="form-group">
                                    <label class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="city" class="form-control" placeholder="City Name" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />

									<div class="form-group">
                                    <label class="col-sm-3 control-label">State</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="state" class="form-control" placeholder="State Name" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />

									 <div class="form-group">
                                    <label class="col-sm-3 control-label">Country</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="country" class="form-control" placeholder="Country Name" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />

									<hr class="line-dashed full-witdh-line" />
									 <div class="form-group">
                                    <label class="col-sm-3 control-label">Pincode</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />


                                     <hr class="line-dashed full-witdh-line" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">File Input</label>
                                        	<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
												<input type="file" name="aimage" multiple>
											</span>
                                    </div>

                                     <hr class="line-dashed full-witdh-line" />
									 <div class="form-group">
                                    <label class="col-sm-3 control-label">Priority</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="priority" class="form-control" placeholder="Priority" data-parsley-trigger="change" required>
                                    </div>
                                    </div>
                                    <hr class="line-dashed full-witdh-line" />
                        
                                </div>

							<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-default" id="form4Submit">Submit</button>
							</div>
						
                        </form>
						
                        </section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<!-- Vendor JavaScripts -->
	<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

	<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->

	<!-- Custom JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
	<!--/ custom javascripts -->

	<!-- Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form1Submit').on('click', function () {
				$('#form1').submit();
			});

			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});

			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script>
	<!--/ Page Specific Scripts -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:26 GMT -->
</html>