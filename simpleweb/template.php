<?php
$class="";
$pageLink="";
if(!isset($pageName))
{
    $pageLink="index.php";
    $class="class='active'";
}


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Mike Clark - WordPress Developer</title>
        <meta charset="utf-8" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property='og:title' content=''>
        <meta property='og:description' content='' />
        <meta property='og:url' content='' />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Relentless Recruiting LLC</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Theme CSS 
    <link href="css/creative.css?version=1" rel="stylesheet" />
    -->
        <link href="css/my.css?ver=2.1" rel="stylesheet" />
        <style>


        </style>
    </head>

    <body data-spy="scroll">
        <!-- Header -->
        <header role="banner" class="topHeaderPic banner">
            <div class="container">
                <div class="row">
                    <div class=" col-md-7 col-xs-12">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                                <h1 class="webDev">WordPress Developer</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-2">
                                <img src="img/meheadBlueBack.png" style="margin-top:20px;" />
                            </div>
                            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0">
                                <hgroup >
                                    <h2>Mike Clark</h2>
                                    <ul>
                                        <li style="margin-bottom:10px;">Seattle, Wa</li>
                                        <li style="margin-bottom:10px;"><a href="https://www.linkedin.com/in/michael-clark-webdeveloper" target="_blank">Linkedin&nbsp;<i class="fa fa-linkedin-square" aria-hidden="true" ></i>&nbsp;</a></li>
                                        <li><a href="#a-contact">contact me via form </a></li>

                                        <!--
                                        <li><a href="http://mikeclark.mossycity.com">http://vintagebikes.mossycity.com/mikeclark</a></li>

                                        -->
                                    </ul>


                                </hgroup>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="topHeader">
            <nav class="navbar navbar-default" style="width:100%; height:44px">

                <div class="container-fluid" style="width:100%">
                    <div id="navbar-brand">
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse " id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="page-scroll" href="<?= $pageLink; ?>#a-whoAmI">Who Am I</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="<?= $pageLink; ?>#a-objective">Objective</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="<?= $pageLink; ?>#a-competencies">Competencies</a>
                            </li>
                            <li <?=$class; ?>>
                                <a class="page-scroll" href="<?= $pageLink; ?>#a-work">Work</a>
                            </li>

                            <li>
                                <a class="page-scroll" href="<?= $pageLink; ?>#a-contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <?php
        
            if(!array_key_exists('body', $GLOBALS))
            {
                include_once "home.php";
            }
            echo $body;
        ?>

            <footer class="container-fluid text-center bg-lightgray">
                <!--  comment out email so that customers contact through form.
                <section id="contactInfo">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 text-center ">

                                <a href="mailto:#@mossycity#.com" style="color:black;"><i style="" class="fa fa-envelope-o fa-2x sr-contact"></i>
                                <p>mikeclark@mossycity.com</p></a>
                            </div>

                            
                        </div>
                    </div>


                </section>
                -->
                <div class="copyrights" style="margin-top:25px;">
                    <p>Mossy City © 2016, All Rights Reserved
                        <br />
                        <span>Web Design By: Mike Clark</span></p>
                    <p><a href="https://www.linkedin.com/in/michael-clark-webdeveloper" target="_blank">Linkedin&nbsp;<i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;</a></p>
                </div>
            </footer>





            <script src="js/waypoints/lib/jquery.waypoints.min.js"></script>
            <script src="js/waypoints/lib/shortcuts/inview.min.js"></script>
            <script src="js/waypoints/lib/shortcuts/sticky.min.js"></script>
            <script src="js/validator.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <script type="text/javascript">
                // Closes the Responsive Menu on Menu Item Click
                $('.navbar-collapse ul li a').click(function() {
                    $('.navbar-toggle:visible').click();
                });
                $(document).ready(function() {

                    var sticky = new Waypoint.Sticky({
                        element: $('#topHeader')[0]
                    })
                });

            </script>
    </body>

    </html>
