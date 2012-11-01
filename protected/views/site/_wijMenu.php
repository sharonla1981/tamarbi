<?php Yii::app()->clientScript->registerScriptFile("http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.7.1.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile("http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.wijmo-open.all.2.0.0.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.wijmo-complete.all.2.0.0.min.js"); ?>

<script id="scriptInit" type="text/javascript">
        $(document).ready(function () { 
            $("#flyoutmenu").wijmenu(); 
            $("#menu").wijmenu(); 
            $("#ipodmenu").wijmenu({ 
                orientation: "vertical", 
                mode: "sliding"
            }); 
        }); 
    </script>
    <style type="text/css"> 
        .demo .wijmo-wijmenu 
        { 
            margin: 3px; 
        } 
        .menuBtn 
        { 
            padding: 5px; 
            margin: 4px; 
        } 
    </style> 
  
  
    <div class="container"> 
        <div class="header"> 
            <h2> 
                Overview</h2> 
        </div> 
        <div class="main demo"> 
            <!-- Begin demo markup -->
            <ul id="flyoutmenu"> 
                <li><a href="#">Breaking News</a> 
                    <ul> 
                        <li> 
                            <h3> 
                                header</h3> 
                        </li> 
                        <li><a href="#">Entertainment</a></li> 
                        <li><a href="http://www.w3schools.com/tags/html5.asp">Politics</a></li> 
                        <li><a href="#">A&amp;E</a></li> 
                        <li><a href="#">Sports</a> 
                            <ul> 
                                <li><a href="#">Baseball</a></li> 
                                <li><a href="#">Basketball</a></li> 
                                <li><a href="#">A really long label would wrap nicely as you can see</a></li> 
                                <li><a href="#">Swimming</a> 
                                    <ul> 
                                        <li><a href="#">High School</a></li> 
                                        <li><a href="#">College</a></li> 
                                        <li><a href="#">Professional</a> 
                                            
                                        <li><a href="#">Adult Recreational</a></li> 
                                        <li><a href="#">Youth Recreational</a></li> 
                                        <li><a href="#">Senior Recreational</a></li> 
                                    </ul> 
                                </li> 
                                <li><a href="#">Tennis</a></li> 
                                <li><a href="#">Ice Skating</a></li> 
                                <li><a href="#">Javascript Programming</a></li> 
                                <li><a href="#">Running</a></li> 
                                <li><a href="#">Walking</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Local</a></li> 
                        <li><a href="#">Health</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Entertainment</a> 
                    <ul> 
                        <li><a href="#">Celebrity news</a></li> 
                        <li><a href="#">Gossip</a></li> 
                        <li><a href="#">Movies</a></li> 
                        <li><a href="#">Music</a> 
                            <ul> 
                                <li><a href="#">Alternative</a></li> 
                                <li><a href="#">Country</a></li> 
                                <li><a href="#">Dance</a></li> 
                                <li><a href="#">Electronica</a></li> 
                                <li><a href="#">Metal</a></li> 
                                <li><a href="#">Pop</a></li> 
                                <li><a href="#">Rock</a> 
                                    <ul> 
                                        <li><a href="#">Bands</a> 
                                            <ul> 
                                                <li><a href="#">Dokken</a></li> 
                                            </ul> 
                                        </li> 
                                        <li><a href="#">Fan Clubs</a></li> 
                                        <li><a href="#">Songs</a></li> 
                                    </ul> 
                                </li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Slide shows</a></li> 
                        <li><a href="#">Red carpet</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Finance</a> 
                    <ul> 
                        <li><a href="#">Personal</a> 
                            <ul> 
                                <li><a href="#">Loans</a></li> 
                                <li><a href="#">Savings</a></li> 
                                <li><a href="#">Mortgage</a></li> 
                                <li><a href="#">Debt</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Business</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Food &#38; Cooking</a> 
                    <ul> 
                        <li><a href="#">Breakfast</a></li> 
                        <li><a href="#">Lunch</a></li> 
                        <li><a href="#">Dinner</a></li> 
                        <li><a href="#">Dessert</a> 
                            <ul> 
                                <li><a href="#">Dump Cake</a></li> 
                                <li><a href="#">Doritos</a></li> 
                                <li><a href="#">Both please.</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                </li> 
                <li><a href="#">Lifestyle</a></li> 
                <li><a href="#">News</a></li> 
                <li><a href="#">Politics</a></li> 
                <li><a href="#">Sports</a> 
                    <ul> 
                        <li><a href="#">Baseball</a></li> 
                        <li><a href="#">Basketball</a></li> 
                        <li><a href="#">Swimming</a> 
                            <ul> 
                                <li><a href="#">High School</a></li> 
                                <li><a href="#">College</a></li> 
                                <li><a href="#">Professional</a> 
                                    <ul> 
                                        <li><a href="#">Mens Swimming</a> 
                                            <ul> 
                                                <li><a href="#">News</a></li> 
                                                <li><a href="#">Events</a></li> 
                                                <li><a href="#">Awards</a></li> 
                                                <li><a href="#">Schedule</a></li> 
                                                <li><a href="#">Team Members</a></li> 
                                                <li><a href="#">Fan Site</a></li> 
                                            </ul> 
                                        </li> 
                                        <li><a href="#">Womens Swimming</a> 
                                            <ul> 
                                                <li><a href="#">News</a></li> 
                                                <li><a href="#">Events</a></li> 
                                                <li><a href="#">Awards</a></li> 
                                                <li><a href="#">Schedule</a></li> 
                                                <li><a href="#">Team Members</a></li> 
                                                <li><a href="#">Fan Site</a></li> 
                                            </ul> 
                                        </li> 
                                    </ul> 
                                </li> 
                                <li><a href="#">Adult Recreational</a></li> 
                                <li><a href="#">Youth Recreational</a></li> 
                                <li><a href="#">Senior Recreational</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Tennis</a></li> 
                        <li><a href="#">Ice Skating</a></li> 
                        <li><a href="#">Javascript Programming</a></li> 
                        <li><a href="#">Running</a></li> 
                        <li><a href="#">Walking</a></li> 
                    </ul> 
                </li> 
            </ul> 
            <ul id="ipodmenu"> 
                <li> 
                    <h3> 
                        News Category</h3> 
                </li> 
                <li></li> 
                <li><a href="#">Breaking News</a> 
                    <ul> 
                        <li><a href="#">Entertainment</a></li> 
                        <li><a href="http://www.w3schools.com/tags/html5.asp">Politics</a></li> 
                        <li><a href="#">A&amp;E</a></li> 
                        <li><a href="#">Sports</a> 
                            <ul> 
                                <li><a href="#">Baseball</a></li> 
                                <li><a href="#">Basketball</a></li> 
                                <li><a href="#">A really long label would wrap nicely as you can see</a></li> 
                                <li><a href="#">Swimming</a> 
                                    <ul> 
                                        <li><a href="#">High School</a></li> 
                                        <li><a href="#">College</a></li> 
                                        <li><a href="#">Professional</a> 
                                            <ul> 
                                                <li><a href="#">Mens Swimming</a> 
                                                    <ul> 
                                                        <li><a href="#">News</a></li> 
                                                        <li><a href="#">Events</a></li> 
                                                        <li><a href="#">Awards</a></li> 
                                                        <li><a href="#">Schedule</a></li> 
                                                        <li><a href="#">Team Members</a></li> 
                                                        <li><a href="#">Fan Site</a></li> 
                                                    </ul> 
                                                </li> 
                                                <li><a href="#">Womens Swimming</a> 
                                                    <ul> 
                                                        <li><a href="#">News</a></li> 
                                                        <li><a href="#">Events</a></li> 
                                                        <li><a href="#">Awards</a></li> 
                                                        <li><a href="#">Schedule</a></li> 
                                                        <li><a href="#">Team Members</a></li> 
                                                        <li><a href="#">Fan Site</a></li> 
                                                    </ul> 
                                                </li> 
                                            </ul> 
                                        </li> 
                                        <li><a href="#">Adult Recreational</a></li> 
                                        <li><a href="#">Youth Recreational</a></li> 
                                        <li><a href="#">Senior Recreational</a></li> 
                                    </ul> 
                                </li> 
                                <li><a href="#">Tennis</a></li> 
                                <li><a href="#">Ice Skating</a></li> 
                                <li><a href="#">Javascript Programming</a></li> 
                                <li><a href="#">Running</a></li> 
                                <li><a href="#">Walking</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Local</a></li> 
                        <li><a href="#">Health</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Entertainment</a> 
                    <ul> 
                        <li><a href="#">Celebrity news</a></li> 
                        <li><a href="#">Gossip</a></li> 
                        <li><a href="#">Movies</a></li> 
                        <li><a href="#">Music</a> 
                            <ul> 
                                <li><a href="#">Alternative</a></li> 
                                <li><a href="#">Country</a></li> 
                                <li><a href="#">Dance</a></li> 
                                <li><a href="#">Electronica</a></li> 
                                <li><a href="#">Metal</a></li> 
                                <li><a href="#">Pop</a></li> 
                                <li><a href="#">Rock</a> 
                                    <ul> 
                                        <li><a href="#">Bands</a> 
                                            <ul> 
                                                <li><a href="#">Dokken</a></li> 
                                            </ul> 
                                        </li> 
                                        <li><a href="#">Fan Clubs</a></li> 
                                        <li><a href="#">Songs</a></li> 
                                    </ul> 
                                </li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Slide shows</a></li> 
                        <li><a href="#">Red carpet</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Finance</a> 
                    <ul> 
                        <li><a href="#">Personal</a> 
                            <ul> 
                                <li><a href="#">Loans</a></li> 
                                <li><a href="#">Savings</a></li> 
                                <li><a href="#">Mortgage</a></li> 
                                <li><a href="#">Debt</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Business</a></li> 
                    </ul> 
                </li> 
                <li><a href="#">Food &#38; Cooking</a> 
                    <ul> 
                        <li><a href="#">Breakfast</a></li> 
                        <li><a href="#">Lunch</a></li> 
                        <li><a href="#">Dinner</a></li> 
                        <li><a href="#">Dessert</a> 
                            <ul> 
                                <li><a href="#">Dump Cake</a></li> 
                                <li><a href="#">Doritos</a></li> 
                                <li><a href="#">Both please.</a></li> 
                            </ul> 
                        </li> 
                    </ul> 
                </li> 
                <li><a href="#">Lifestyle</a></li> 
                <li><a href="#">News</a></li> 
                <li><a href="#">Politics</a></li> 
                <li><a href="#">Sports</a> 
                    <ul> 
                        <li><a href="#">Baseball</a></li> 
                        <li><a href="#">Basketball</a></li> 
                        <li><a href="#">Swimming</a> 
                            <ul> 
                                <li><a href="#">High School</a></li> 
                                <li><a href="#">College</a></li> 
                                <li><a href="#">Professional</a> 
                                    <ul> 
                                        <li><a href="#">Mens Swimming</a> 
                                            <ul> 
                                                <li><a href="#">News</a></li> 
                                                <li><a href="#">Events</a></li> 
                                                <li><a href="#">Awards</a></li> 
                                                <li><a href="#">Schedule</a></li> 
                                                <li><a href="#">Team Members</a></li> 
                                                <li><a href="#">Fan Site</a></li> 
                                            </ul> 
                                        </li> 
                                        <li><a href="#">Womens Swimming</a> 
                                            <ul> 
                                                <li><a href="#">News</a></li> 
                                                <li><a href="#">Events</a></li> 
                                                <li><a href="#">Awards</a></li> 
                                                <li><a href="#">Schedule</a></li> 
                                                <li><a href="#">Team Members</a></li> 
                                                <li><a href="#">Fan Site</a></li> 
                                            </ul> 
                                        </li> 
                                    </ul> 
                                </li> 
                                <li><a href="#">Adult Recreational</a></li> 
                                <li><a href="#">Youth Recreational</a></li> 
                                <li><a href="#">Senior Recreational</a></li> 
                            </ul> 
                        </li> 
                        <li><a href="#">Tennis</a></li> 
                        <li><a href="#">Ice Skating</a></li> 
                        <li><a href="#">Javascript Programming</a></li> 
                        <li><a href="#">Running</a></li> 
                        <li><a href="#">Walking</a></li> 
                    </ul> 
                </li> 
            </ul> 
            <!-- End demo markup -->
            <div class="demo-options"> 
                <!-- Begin options markup -->
                <!-- End options markup -->
            </div> 
        </div> 
        <div class="footer demo-description"> 
            <p> 
                Create multi-level menus with animation effects, images and check box items, interactive 
                item scrolling, and more using the wijmenu widget. You can even create a pop-up 
                menu for context help within your application.</p> 
            The wijmenu samples introduce you to some of the key features, including menu orientation, 
            menu position, the event that opens the menu, and more. 
        </div> 
    </div>