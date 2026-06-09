<!-- CONTENT -->
		<section id="content">
			<div class="page page-forms-validate">
				<!-- bradcome -->
				<div class="bg-light lter b-b wrapper-md mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Reporter Chat</h1>
							<!-- a<small class="text-muted">Welcome to Falcon application</small> -->
						</div>
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Edit</strong> Reporter Chat</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" enctype="multipart/form-data" name="form4" role="form" id="form4" method="post" action="<?php echo site_url() ?>/reporterchatcontroller/up_reporterchat/<?php echo $data->reporterchatid ?>" data-parsley-validate>

								<div class="form-group">
										<label class="col-sm-3 control-label">AID</label>
										<div class="col-sm-9">
								
										<select class="form-control" name="Aid">	
										<?php
											$rep=$this->db->get('admin_register')->result();
										foreach($rep as $r)
										{
											?>
											<option value="<?php echo $r->Aid ?>"><?php echo $r->Aname ?></option>
											<?php
										}	
										?>
										</select>

									</div>
									</div>
									<hr class="line-dashed full-witdh-line" />

                                    <div class="form-group">
										<label class="col-sm-3 control-label">Reporter Message</label>
										<div class="col-sm-9">
											<input type="text" name="reportermsg" class="form-control" value="<?php echo $data->reportermsg?>" placeholder="Reporter Message" data-parsley-trigger="change" required>
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