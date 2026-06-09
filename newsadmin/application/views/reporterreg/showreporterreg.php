<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Reporter Reg Tables</h1>
							<!-- <small class="text-muted">Welcome to Falcon application</small> -->
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Show</strong> Reporter Reg</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>Repid</th>
											<th>Rname</th>
											<th data-hide='phone, tablet'>Remail</th>
											<th data-hide="phone">Rpassword</th>
											<th data-hide='phone, tablet'>Rgender</th>
											<th data-hide='phone, tablet'>Raddress</th>
											<th data-hide='phone, tablet'>Rmno</th>
											<th data-hide='phone, tablet'>Rimage</th>
											<th data-hide='phone, tablet'>Datereg</th>
											<th data-hide='phone, tablet'>Update User</th>
											<th data-hide='phone, tablet'>Reg Status</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>
									<?php
									foreach($reporterreg as $row)
										{
										?>
										<tr>
											<td><?php echo $row->repid?></td>
											<td><?php echo $row->rname?></td>
											<td><?php echo $row->remail?></td>
											<td><?php echo $row->rpassword?></td>
											<td><?php echo $row->rgender?></td>
											<td><?php echo $row->raddress?></td>
											<td><?php echo $row->rmno?></td>
											<td><img src="<?php echo base_url() ?>/imgupload/<?php echo $row->rimage?>" width="100" height="100"></td>
											<td><?php echo $row->datereg?></td>
											<td><?php echo $row->updateuser?></td>
											<td><a href="<?php echo site_url() ?>/reporterregcontroller/status/<?php echo $row->repid?>"><?php echo $row->regstatus ?></a></td>
											<td>
												<a href="<?php echo site_url() ?>/reporterregcontroller/del/<?php echo $row->repid?>"><i class="glyphicon glyphicon-trash"></i></a> |
												<a href="<?php echo site_url() ?>/reporterregcontroller/edit/<?php echo $row->repid?>"><i class="glyphicon glyphicon-pencil"></i></a>
											</td>
										</tr>

										<?php
										}
										?>
									</tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->

	</div>
	<!--/ Application Content -->

	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:54 GMT -->
</html>