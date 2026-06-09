<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Post Rating Tables</h1>
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
									<strong>Show</strong> Post Rating</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>Ratid</th>
											<th>Rid</th>
											<th data-hide="phone">Uemail</th>
											<th data-hide='phone, tablet'>Ratlike</th>
											<th data-hide='phone, tablet'>Datereg</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($postrating as $row)
											{
											?>

										<tr>
											<td><?php echo $row->ratid ?></td>
											<td><?php echo $row->title ?></td>
											<td><?php echo $row->uemail ?></td>
											<td><?php echo $row->ratlike ?></td>
											<td><?php echo $row->datereg ?></td>
											<td>
												<a href="<?php echo site_url() ?>/postratingcontroller/del/<?php echo $row->ratid ?>"><i class="glyphicon glyphicon-trash"></i></a> |
												<a href="<?php echo site_url() ?>/postratingcontroller/edit/<?php echo $row->ratid ?>"><i class="glyphicon glyphicon-pencil"></i></a>

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