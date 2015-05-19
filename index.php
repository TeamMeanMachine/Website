<?php

    /*require_once('mobile_device_detect.php');
    mobile_device_detect(true,false,true,true,true,true,true,'mindex.php',false);*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <?php
            $pagename = "";
            if($_REQUEST["page"]) {
                $pagename = $_GET["page"];
            }

            $pagename = htmlspecialchars($pagename);

            if ($pagename == '') {
                $pagename = "Home";
            }
            
            $menu = array(
                'About Us' => array('index.php?page=About%20Us' => array('About our Robot' => 'index.php?page=About%20Us&sub=2013 Robot','About our Mentors' => 'index.php?page=About%20Us&sub=mentors','About FIRST' => 'index.php?page=About%20Us&sub=first', 'About our Safety' => 'index.php?page=About%20Us&sub=Safety')),
                'Latest News' => array('index.php?page=Latest%20News' => 'none'),
                'Calendar' => array('index.php?page=Calendar' => 'none'),
                'Robots and Awards' => array('index.php?page=Robots%20and%20Awards' => 'none'),
                'Important Links' => array('index.php?page=Important%20Links' => 'none'),
                'Sponsors' => array('index.php?page=Sponsors' => array('Become a Sponsor' => 'index.php?page=Sponsor%20Us', 'Sponsor Presentations' => 'index.php?page=Sponsor%20Presentations')),
                'Media Gallery' => array('index.php?page=Media%20Gallery' => array('Parts Plans' => 'index.php?page=Parts%20Plans')),
            );
            
        ?>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo "$pagename - Team 2471"; ?></title>
        <meta name="keywords" content="" />
        <link href="default.css" rel="stylesheet" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="facebook" class="fb-like" data-href="http://www.facebook.com/pages/FIRST-Team-Mean-Machine-2471/240005312727396" data-send="false" data-layout="box_count" data-width="55" data-show-faces="true" data-colorscheme="dark"></div>
        <!-- start header -->
        <?php

            include("header.php");

        ?>
        <!-- end header -->
        <div id="wrapper">
            <!-- Start Menu -->
            <div id="menu">
                <ul class="drop_menu">
                    <?php
                        foreach($menu as $pagetitle => $urls) {
                            foreach($urls as $mainurl => $suburls) {
                                if($pagetitle == $pagename) {
                                    $class = 'current_page_item';   
                                }
                                else {
                                    $class = '';   
                                }
                                echo '<li class="',$class,'"><a href="',$mainurl,'">',$pagetitle,'</a>';
                                if($suburls != 'none') {
                                    echo '<ul>';
                                    foreach($suburls as $subpagetitle => $suburl) {
                                        echo '<li><a href="',$suburl,'">',$subpagetitle,'</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';
                            }
                        }
                    ?>
                </ul>
            </div>    
            <!-- start page -->
            <div id="page">
                <!-- start content -->
                <div>
                    <div id="content">

                        <?php
                            if ($pagename == "Home") {
                            include("content/home_content.php");
                            } elseif ($pagename == "Latest News") {
                            include("content/newsfeed.php");
                            } elseif ($pagename == "Calendar") {
                            include("content/calendar_content.php");
                            } elseif ($pagename == "About Us") {
                            include("content/about_content.php");
                            } elseif ($pagename == "Robots and Awards") {
                            include("content/awards_content.php");
                            } elseif ($pagename == "Important Links") {
                            include("content/links_content.php");
                            } elseif ($pagename == "Media Gallery") {
                            include("content/media_content.php");
                            } elseif ($pagename == "Sponsors") {
                            include("content/Our_sponsers.php");
                            } elseif ($pagename == "Debug") {
                            include("content/debug.php");
                            } elseif ($pagename == "Debug2") {
                            include("content/debug2.php");
                            } elseif ($pagename == "Sponsor Us") {
                            include("content/sponsor_us.php");
                            } elseif ($pagename == "Parts Plans") {
			    include("content/parts_content.php");
			    } elseif ($pagename == "Sponsor Presentations") {
			    include("content/presentation.php");
			    }
                        ?>		
                    </div>
                    <!-- end content -->
                    <!-- start sidebars -->
                    <?php 
                        include("sidebar.php");
                    ?>
                    <!-- end sidebars -->
                    <div style="clear: both;"></div>
                </div>
                <!-- end page -->
            </div>
            <?php 
                include("footer.php")
            ?>
        </div>
    </body>
</html>
