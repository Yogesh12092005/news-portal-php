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
                   
                    <a href="<?php echo site_url()?>/admincontroller">
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">   
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0">Admin</h3>
                                <?php
                                $admin_count = $this->db->count_all('admin_register');
                                ?>
                                 <p>Records : <?php echo $admin_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/breakingnewscontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl" >
                            <div class="boxs-body">
                                <h3 class="mt-0">Breaking News</h3>
                                <?php
                                $breakingnews_count = $this->db->count_all('breakingnews');
                                ?>
                                 <p>Records : <?php echo $breakingnews_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/categorycontroller">
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

                    <a href="<?php echo site_url()?>/chatcontroller">
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

                    <!-- 5 -->

                    <a href="<?php echo site_url()?>/citycontroller">
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">   
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0">City</h3>
                                <?php
                                $city_count = $this->db->count_all('city');
                                ?>
                                 <p>Records : <?php echo $city_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/countrycontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl" >
                            <div class="boxs-body">
                                <h3 class="mt-0">Country</h3>
                                <?php
                                $country_count = $this->db->count_all('country');
                                ?>
                                 <p>Records : <?php echo $country_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/feedbackcontroller">
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

                    <a href="<?php echo site_url()?>/postratingcontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h3 class="mt-0">Post Rating</h3>
                                <?php
                                $post_rating_count = $this->db->count_all('postrating');
                                ?>
                                 <p>Records : <?php echo $post_rating_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!-- 9 -->
                     <a href="<?php echo site_url()?>/reporterchatcontroller">
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">   
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0">Reporter Chat</h3>
                                <?php
                                $reporterchat_count = $this->db->count_all('reporterchat');
                                ?>
                                 <p>Records : <?php echo $reporterchat_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/reporterregcontroller">
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

                    <a href="<?php echo site_url()?>/reporterpostcontroller">
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

                    <a href="<?php echo site_url()?>/slidercontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h3 class="mt-0">Slider</h3>
                                <?php
                                $slider_count = $this->db->count_all('slider');
                                ?>
                                 <p>Records : <?php echo $slider_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!-- 14 -->
                     <a href="<?php echo site_url()?>/statecontroller">
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">   
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0">State</h3>
                                <?php
                                $state_count = $this->db->count_all('state');
                                ?>
                                 <p>Records : <?php echo $state_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/subcategorycontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl" >
                            <div class="boxs-body">
                                <h3 class="mt-0">Sub Category</h3>
                                <?php
                                $subcategory_count = $this->db->count_all('subcategory');
                                ?>
                                 <p>Records : <?php echo $subcategory_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/subscribercontroller">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h3 class="mt-0">Subscriber</h3>
                                <?php
                                $subscriber_count = $this->db->count_all('subscriber');
                                ?>
                                 <p>Records : <?php echo $subscriber_count; ?></p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="<?php echo site_url()?>/todaynewscontroller">
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

                    <!-- 17 -->
                      <a href="<?php echo site_url()?>/userregcontroller">
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">   
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0">User Reg</h3>
                                <?php
                                $user_count = $this->db->count_all('userreg');
                                ?>
                                 <p>Records : <?php echo $user_count; ?></p>
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