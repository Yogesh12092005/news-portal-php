   <div id="controls">
            <aside id="leftmenu">
                <div id="leftmenu-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation">
                                        <li class="active open">
                                            <a href="<?php echo site_url() ?>/homecontroller/dashboard">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>

                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-user"   ></i>
                                                <span>Admin</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/admincontroller">
                                                        <i class="fa fa-angle-right"></i> Show Admin
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url()?>/admincontroller/addadmin">
                                                        <i class="fa fa-angle-right"></i> Add Admin</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                       

                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-bullhorn"></i>
                                                <span>Breaking News</span>
                                            </a>
                                            <ul>
                                                <li>
                                                   <a href="<?php echo site_url() ?>/breakingnewscontroller">
                                                        <i class="fa fa-angle-right"></i> Show Breaking News
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/breakingnewscontroller/addbreaking">
                                                        <i class="fa fa-angle-right"></i> Add Breaking News</a>
                                                </li>
                                                
                                            </ul>
                                        </li>


                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-th-large"></i>
                                                <span>Category</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/categorycontroller">
                                                        <i class="fa fa-angle-right"></i> Show Category
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                        <a href="<?php echo site_url() ?>/categorycontroller/addcategory">
                                                        <i class="fa fa-angle-right"></i> Add Category</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      


                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-comment"></i>
                                                <span>Chat</span>
                                            </a>
                                            <ul>
                                                <li>
                                                   <a href="<?php echo site_url() ?>/chatcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Chat
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/chatcontroller/addchat">
                                                        <i class="fa fa-angle-right"></i> Add Chat</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      


                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-building"></i>
                                                <span>City</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/citycontroller">
                                                        <i class="fa fa-angle-right"></i> Show City
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                   <a href="<?php echo site_url() ?>/citycontroller/addcity">
                                                        <i class="fa fa-angle-right"></i> Add City</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                
                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-globe" ></i>
                                                <span>Country</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/countrycontroller">
                                                        <i class="fa fa-angle-right"></i> Show Country
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/countrycontroller/addcountry">
                                                        <i class="fa fa-angle-right"></i> Add Country</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    
                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-wechat"></i>
                                                <span>Feedback</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/feedbackcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Feedback
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/feedbackcontroller/addfeedback">
                                                        <i class="fa fa-angle-right"></i> Add Feedback</a>
                                                </li>
                                                
                                            </ul>
                                        </li>

                                       
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-star"></i>
                                                <span>Post Rating</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/postratingcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Post Rating
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                     <a href="<?php echo site_url() ?>/postratingcontroller/addpostrating">
                                                        <i class="fa fa-angle-right"></i> Add Post Rating</a>
                                                </li>
                                                
                                            </ul>
                                        </li>

                                    

                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-comments"></i>
                                                <span>Repoter Chat</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterchatcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Repoter Chat
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterchatcontroller/addreporterchat">
                                                        <i class="fa fa-angle-right"></i> Add Repoter Chat</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    


                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-user"></i>
                                                <span>Repoter Reg</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterregcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Repoter Reg
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterregcontroller/addreporter">
                                                        <i class="fa fa-angle-right"></i> Add Repoter Reg</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    
                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-id-card-o" style="font-size:19px; margin-left:2px"></i>
                                                <span>Reporter Post</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterpostcontroller">
                                                        <i class="fa fa-angle-right"></i> Show Reporter Post 
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/reporterpostcontroller/addreporterpost">
                                                        <i class="fa fa-angle-right"></i> Add Reporter Post</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    

                                        <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-sliders"></i>
                                                <span>Slider</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/slidercontroller">
                                                        <i class="fa fa-angle-right"></i> Show Slider
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/slidercontroller/addslider">
                                                        <i class="fa fa-angle-right"></i> Add Slider</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    

                                         <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-bank"></i>
                                                <span>State</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/statecontroller">
                                                        <i class="fa fa-angle-right"></i> Show State
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/statecontroller/addstate">
                                                        <i class="fa fa-angle-right"></i> Add State</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      


                                    <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-list"></i>
                                                <span>Sub Category</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url()?>/subcategorycontroller">
                                                        <i class="fa fa-angle-right"></i> Show Sub Category
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/subcategorycontroller/addsubcategory">
                                                        <i class="fa fa-angle-right"></i> Add Sub Category</a>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                      
                                    

                                    <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-bell"></i>
                                                <span>Subscriber</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/subscribercontroller">
                                                        <i class="fa fa-angle-right"></i> Show Subscriber
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/subscribercontroller/addsubscriber">
                                                        <i class="fa fa-angle-right"></i> Add Subscriber</a>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                      

                                    
                                    <li>
                                            <a role="button" tabindex="0">
                                                <i class="glyphicon glyphicon-list-alt"></i>
                                                <span>Today News</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/todaynewscontroller">
                                                        <i class="fa fa-angle-right"></i> Show Today News
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url() ?>/todaynewscontroller/addtodaynews">
                                                        <i class="fa fa-angle-right"></i> Add Today News</a>
                                                </li>
                                                
                                            </ul>
                                    </li>
                                      
                                    

                                    <li>
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-users"></i>
                                                <span>User Reg</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url()?>/userregcontroller">
                                                        <i class="fa fa-angle-right"></i> Show User Reg
                                                        <span class="label label-success">new</span>
                                                    </a>
                                                </li>
                                                <li>
                                                     <a href="<?php echo site_url()?>/userregcontroller/adduserreg">
                                                        <i class="fa fa-angle-right"></i> Add User Reg</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                      
                                    
                                    
                                    
                                    
                                    </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </aside>
            
        </div>
        