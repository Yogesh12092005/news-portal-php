    <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Dashboard</h1>
                              <!-- <small class="text-muted">Welcome to Falcon application</small> -->
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                   
                    
                    <a href="<?php echo site_url()?>/repcategorycontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h3 class="mt-0">Category</h3>
                                <?php
                                $category_count = $this->db->count_all('category');
                                ?>
                                 <p>Records : <?php echo $category_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/repchatcontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h3 class="mt-0">Chat</h3>
                                <?php
                                $chat_count = $this->db->count_all('chat');
                                ?>
                                 <p>Records : <?php echo $chat_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/repfeedbackcontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h3 class="mt-0">Feedback</h3>
                                <?php
                                $feedback_count = $this->db->count_all('feedback');
                                ?>
                                 <p>Records : <?php echo $feedback_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>


                    <a href="<?php echo site_url()?>/repreporterregcontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl" >
                            <div class="boxs-body">
                                <h3 class="mt-0">Reporter Reg</h3>
                                <?php
                                $reporterreg_count = $this->db->count_all('reportereg');
                                ?>
                                 <p>Records : <?php echo $reporterreg_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/repreporterpostcontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen"> 
                         
                            <div class="boxs-body">
                                <h3 class="mt-0">Reporter Post</h3>
                                <?php
                                $reporterpost_count = $this->db->count_all('reporterpost');
                                ?>
                                 <p>Records : <?php echo $reporterpost_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/reptodaynewscontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h3 class="mt-0">Today News</h3>
                                <?php
                                $todaynews_count = $this->db->count_all('todaynews');
                                ?>
                                 <p>Records : <?php echo $todaynews_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                
                </div>
                       
            </div>
        </section>
    </div>
    <!-- Vendor JavaScripts -->
    <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="<?php echo base_url() ?>assets/bundles/flotscripts.bundle.js"></script>    
    <script src="<?php echo base_url() ?>assets/bundles/d3cripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/sparkline.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/raphael.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/morris.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/page/index.js"></script>     
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:03 GMT -->
</html>