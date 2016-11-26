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

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Theme CSS 
    <link href="css/creative.css?version=1" rel="stylesheet" />
    -->
    <link href="css/my.css" rel="stylesheet" />
    <style>


    </style>
</head>

<body data-spy="scroll">
    <!-- Header -->
    <header role="banner" class="topHeaderPic">
        <div class="container">
            <div class="row">
                <hgroup class="col-sm-6">
                    <h2 class="banner">Web Developer</h2>
                    <h1>Mike Clark</h1>
                    <ul>
                        <li>Seattle, Wa</li>
                        <li><a href="mailto:mon.adresse@email.fr">mikehike123@gmail.com&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;</a></li>
                        <li><a href="http://www.mon-site.fr/">www.mossycity.com</a></li>
                        <li><a class="toContactform">by contact form</a></li>
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
                            <a class="page-scroll" href="#a-kellyquote">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#a-about">Commitment</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#a-profile">Profile</a>
                        </li>

                        <li>
                            <a class="page-scroll" href="#a-contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>
    </div>


    <?php
        
        if(!array_key_exists('body', $GLOBALS))
        {
            include_once "body.php";
        }
        echo $body;
    ?>

    <footer class="container-fluid text-center bg-lightgray" style="margin-top:300px;">


        <a class="anchor" id="a-contact"></a>
        <section id="contact">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Chat!</h2>
                        <hr class="primary">
                        <p class="hook"> Are you ready to be a relentless sales candidate or hire one? That's great! Give us a call or send an email for a <u>very confidential</u> discussion on how we can help you!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 text-center ">
                        <div class="row contact-info">
                            <div class="col-lg-4 text-center">
                                <a href="mailto:kelly@r-recruitingusa.com" style="color:black;"><i style="" class="fa fa-envelope-o fa-3x sr-contact"></i>
                                <p>kelly@r-recruitingusa.com</p></a>
                            </div>
                            <div class="col-lg-offset-1 col-lg-3 text-center " style="margin-top:30px;margin-bottom:20px;">

                            </div>
                            <div class="col-lg-3  text-center">
                                <a href="tel:12102021930" style="color:black;"><i class="fa fa-phone fa-3x sr-contact"></i>
                            <p>210-202-1930</p></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <div class="copyrights">
            <p>Relentless Recruiting © 2016, All Rights Reserved
                <br />
                <span><a  href="http://www.andrewbirnbrich.com/index.html"  target="_blank">Web Design By: Andrew Birnbrich &amp; Mike Clark</a></span></p>
        </div>
    </footer>

    <script src="js/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="js/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="js/waypoints/lib/shortcuts/sticky.min.js"></script>
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
