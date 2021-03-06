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
        <title>Mike Clark - Web Developer</title>
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



        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="js/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="js/waypoints/lib/shortcuts/inview.min.js"></script>
        <script src="js/waypoints/lib/shortcuts/sticky.min.js"></script>
        <script src="js/validator.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <hgroup class="col-sm-6">
                        <h1>Web Developer</h1>
                        <h2>Mike Clark</h2>
                        <ul>
                            <li>Seattle, Wa</li>
                            <li><a href="mailto:mikeclark@mossycity.com">mikeclark@mossycity.com&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;</a></li>
                            <li><a href="http://vintagebikes.mossycity.com/mikeclark">http://vintagebikes.mossycity.com/mikeclark</a></li>
                            <li><a href="#a-contact">by contact form</a></li>
                        </ul>
                    </hgroup>


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
                            <li <?= $class; ?>>
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


        <?php
        
            if(!array_key_exists('body', $GLOBALS))
            {
                include_once "home.php";
            }
            echo $body;
        ?>

            <footer class="container-fluid text-center bg-lightgray">

                <section id="contactInfo">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-8 col-lg-offset-2 text-center">
                                <h2 class="section-heading">Let's Chat!</h2>
                                <hr class="primary">
                                <p class="hook"> Are you ready to hire an experienced web developer? That's great! Give us a call or send an email for a <u>very confidential</u> discussion on how we can help you!</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 text-center ">

                                <a href="mailto:mikeclark@mossycity.com" style="color:black;"><i style="" class="fa fa-envelope-o fa-2x sr-contact"></i>
                                <p>mikeclark@mossycity.com</p></a>
                            </div>

                            
                        </div>
                    </div>


                </section>

                <div class="copyrights">
                    <p>Mossy City © 2016, All Rights Reserved
                        <br />
                        <span>Web Design By: Mike Clark</span></p>
                </div>
            </footer>


            <script type="text/javascript">
                // Closes the Responsive Menu on Menu Item Click
                $('.navbar-collapse ul li a').click(function() {
                    $('.navbar-toggle:visible').click();
                });
                $(document).ready(function() {

                    var sticky = new Waypoint.Sticky({
                            element: $('#topHeader')[0]
                        })
                        /*
                        $('#topHeader').affix({
                            offset: {
                                top: (window.innerHeight - 44)
                            }
                        });
                        */
                });

            </script>
    </body>

    </html>
