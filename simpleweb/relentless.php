<?php
    ob_start(); 
    
?>
    <a class="anchor" id="a-pageTop"></a>
    <a id="skills" class="anchor"> </a>




    <section>

        <div class="container" style="">

            <div class="row" style="">
                <div class="col-lg-offset-3 col-lg-6 ">
                    <ul class="pager">
                        <li><a href="index.php#a-work">❮ Previous</a></li>
                        <li><a href="#">Next  ❯</a></li>
                    </ul>
                </div>
            </div>

            <div class="sectionTitle">Relentless Recruiting</div>
            <div class="row" style="">
                <div class="col-xl-4 col-lg-6 text-center">

                    <header>
                        <h2>Mobile</h2></header>
                    <iframe src="http://r-recruitingusa.com/" style="width:375px;height:600px"></iframe>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <header>
                        <h2 style="text-decoration: underline;">Skills Used</h2></header>
                    <ul style="color:black;background-color:white;">
                        <li>html</li>
                        <li>css</li>
                        <li>bootstrap</li>
                    </ul>
                </div>

                <div class="col-xl-6 col-lg-12 text-center">
                    <header>
                        <h2 >Desktop</h2></header>
                    <iframe src="http://r-recruitingusa.com/" style="width:100%;height:600px"></iframe>
                </div>

            </div>
            <div class="row" style="">
                <div class="col-lg-offset-3 col-lg-6 ">
                    <ul class="pager">
                        <li><a href="index.php#work">❮ Previous</a></li>
                        <li><a href="#">Next  ❯</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </section>




    <script src="js/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="js/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="js/waypoints/lib/shortcuts/sticky.min.js"></script>
    <script type="text/javascript">
        function loadSkillgraph() {
            $(".skillData").each(function(index, element) {
                // element == this
                var mydata = $(element).data();
                var cnt = 0;

                function go() {
                    if (cnt++ < mydata['percent']) {
                        setTimeout(go, 10);
                    }
                    $(element).css('width', cnt + '%');

                }

                go();

            });

        }
        var inview = new Waypoint.Inview({
            element: $('#skillgraph')[0],
            enter: function(direction) {
                //alert('Enter triggered with direction ' + direction)
                loadSkillgraph();
            },
            entered: function(direction) {
                //alert('Entered triggered with direction ' + direction)
            },
            exit: function(direction) {
                //alert('Exit triggered with direction ' + direction)
            },
            exited: function(direction) {
                //alert('Exited triggered with direction ' + direction)
            }
        })

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

        $(document).ready(function() {

            var w = $(window).width();
            var h = $(window).height();
            var pl = $('.player');

            pl.css('top', h / 2);

            //alert("this worked");
            //FULL SCREEN 
            var c = 1;

            $(".fa-expand").click(function() {
                $(this).closest(".grid__details_hide").toggleClass('grid__details_show');
                //$(this).closest(".grid__details_hide").remove();

            });



            $(".profileLink").click(function() {
                //$('.fa-expand').click(function() {
                //el = $(this).find(".fa-expand");
                //c++;

                //el.toggleClass('fa-compress');

                //el = $(this).find(".grid__details_hide").clone();
                //$(el).appendTo("body");
                el = $("#slide1");
                $(el).toggleClass('grid__details_show');

                //grid__details_show
                /*
                                //odd -> Full Screen 
                                if (c % 2 == 0) {

                                    pl.animate({
                                        width: w
                                    }, 300, function() {
                                        $(this).animate({
                                            height: h
                                        }, 300);
                                        pl.addClass('active');
                                    });
                                }

                                //even -> Exit Full Screen 
                                if (c % 2 != 0) {

                                    pl.animate({
                                        height: '480'
                                    }, 300, function() {
                                        $(this).animate({
                                            width: '850'
                                        }, 300);
                                        pl.removeClass('active');
                                    });

                                }
                */
            });
            /*
            //PLAY BTN
            $('.fa-play').click(function() {
                $(this).toggleClass('fa-pause');
            });
            */

        });

    </script>
    <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
