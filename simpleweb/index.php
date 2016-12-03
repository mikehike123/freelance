<?php
    $pageName="index.php";
    
    abstract class MailStatus {
            const NotSentYet = 0;
            const Successful = 1;
            const Failed = 2;
    }
    abstract class MailErr
    {
        public static $Status = MailStatus::NotSentYet;
        public static $Error="";
        private static $errorMsgs = array();
        public static function Append($msg)
        {
            array_push(self::$errorMsgs,$msg);
            self::$Status=MailStatus::Failed;
        }
        public static function Success()
        {
            if(self::$Status === MailStatus::Failed) 
                return;
            else
                self::$Status = MailStatus::Successful;
        }
        public static function Message()
        {
            $line = "<ul class='alerts'>";
            foreach(self::$errorMsgs as $msg)
            {
                $line = $line."<li>".$msg."</li>";
            }
            $line =  $line."</ul>";
            return $line;
        }
        
    }
    

    
    
    
    $mailError="";
    $mailStatus = MailStatus::NotSentYet;
    ob_start(); 
    
    // test if it's a post
    if(isset($_POST['submit'])){
        require_once('mailer.php');
    }
    
    
?>
    <a class="anchor" id="a-whoAmI"></a>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 whoIam">
                    <div class="sectionTitle">Who I am</div>
                    <p>Hi, thanks for visiting my website.</p>
                    <p>I live near Seattle and can be reached by phone; web conferencing or email. I have 10+ years in web development industry, mostly as a software contractor for The Boeing Company and Microsoft but now I'm a freelancer.</p>
                </div>
            </div>
        </div>

    </section>

    <a class="anchor" id="a-objective"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 myAboutMe">


                    <div class="sectionTitle">Objective</div>

                    <p>I'm actively looking for freelance jobs that align well with my passions. I'm passionated about the css framework <em>Bootstrap</em>, php framework&nbsp;<em>Laravel</em>, <em>WordPress</em>, <em>Mysql</em> and building responsive websites that function well on both desktop and mobile devices.</p>


                </div>
            </div>
        </div>

    </section>


    <a class="anchor" id="a-competencies"></a>
    <!-- /.row -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle">Competencies</div>
                    <div id="skillgraph" class="panel panel-default row">
                        <div class='panel-title text-Left '></div>
                        <div class='row skill-row'>
                            <span class='skillLabel'>Design Layer</span>
                            <span class='skillData-Wrapper'>
                        <span class='skillData bg-blue text-center' data-percent='50'>Intermediate</span></span>

                        </div>
                        <div class='row skill-row'>
                            <span class='skillLabel'>Front End {View} </span><code>(Skills: HTML, css, sass, blade, jquery, bootstrap, Laravel Blade)</code>
                            <span class='skillData-Wrapper'>
                            <span class='skillData bg-rust' data-percent='60'>Intermediate</span></span>
                        </div>
                        <div class='row skill-row'>
                            <span class='skillLabel'>Middle Layer {Controller}</span><code>(Skills: php, Laravel)</code>
                            <span class='skillData-Wrapper'>
                            <span class='skillData bg-blue' data-percent='80'>Strong</span></span>
                        </div>
                        <div class='row skill-row'>
                            <span class='skillLabel'>Data Layer {Model}</span><code>(Skills: MS SQL, MySQL, Laravel Eloquent)</code>
                            <span class='skillData-Wrapper'>
                            <span class='skillData bg-rust' data-percent='80'>Strong</span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <a class="anchor" id="a-work"></a>
    <section class="portfolio">
        <div class="container">


            <div class="sectionTitle">Examples Of My Work</div>
            <div class="container" style="margin-top:10px;">
                <div class="row form-group">
                    <div class="col-xs-12 col-md-4" style="hieght:300px;">
                        <div class="panel panel-default">
                            <div class="panel-image hide-panel-body">
                                <img src="img/kellywebbutton.png" class="panel-image-preview" />
                            </div>

                            <div class="panel-footer text-center">
                                <h4>RELENTLESS RECRUITING</h4>
                                <a href="portfolioRelentless.php">See More<span class="glyphicon glyphicon-share-alt"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-image hide-panel-body">
                                <img src="img/mikesbikes.png" class="panel-image-preview" />
                            </div>

                            <div class="panel-footer text-center">
                                <h4>MIKES USED BIKE'S</h4>
                                <a href="portfolioMikesBikes.php">See More<span class="glyphicon glyphicon-share-alt"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-image hide-panel-body">
                                <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                            </div>
                            
                            <div class="panel-footer text-center">
                                <h4>RELENTLESS RECRUITING</h4>
                                <a href="#share">See More<span class="glyphicon glyphicon-share-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <a class="anchor" id="a-experience"></a>
    <!-- Expériences -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle">Experiences</div>
                    <ul class="jobSummary">
                        <li>3 years of php development experience.</li>
                        <li>7 years of .Net development experience.</li>
                        <li>13 years of SQL Database experience.</li>
                        <li>13 years of Web development experience.</li>
                        <li>20 years of software development experience.</li>
                        <li>12 years of Engineering experience.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <a class="anchor" id="a-employment"></a>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle">Employment History</div>

                    <ul class="job">


                        <li>
                            <h4><strong>Senior Software Contractor (11/22/10-12/22/10)</strong></h4>
                            <h4><strong>Chipton Ross/Boeing</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, HTML, javascript, jquery, .Net, Excel, SQL Server, Stored Procedures, Full Text Search</span></div>

                            <ul class="responsible">
                                <li>Gathered requirements designed and implemented a custom web site to act an authenticated portal for Engineers to search and download for various project files. Features included the ability of admin Users to dynamically create web content and upload project files. Web pages could be configured to restrict access to Users belonging to specific security roles. In addition, these pages allowed in place editing of content.</li>
                                <li>Gathered requirements designed and implemented a system tray windows program for Users to quickly open group directories and files.</li>
                                <li>Gathered requirements, designed and implemented an MS Excel shared macro to quickly set the working folding.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>VintageBikes.mossycity.com(1/1/2012-Present)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>php, html, mysql, Laravel, WordPress</span></div>
                            <ul class="responsible">
                                <li>I restore vintage bikes and resell them. I've had various websites which I've coded in whatever skill which I was focusing on at the time. </li>
                            </ul>
                        </li>

                        <li>
                            <h4><strong>MCSoftware - Freelance Projects (7/06-Present)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>ClickOnce Smart Client, php</span></div>
                            <ul class="responsible">
                                <li>Developed “Virtual Stock Trader”, a windows program to teach people how to trade stocks using technical indicators. Downloads historical stock data from the net and plots these data on the screen. Allows users to step through the data in time and decide when to buy and sell stocks based on the charts.</li>
                                <li>Developed the Community Empowerment’s Web site using Joomla’s content management system: http://www.endruralpoverty.org/</li>
                                <li>Developed an Event Registration System for Community Empowerment using php and MySQL</li>
                                <li>Developed a Dating Site using Microsoft’s Dot-Net platform and MySQL: http://www.soulpick.com</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Volt/Microsoft (10/07-1/08)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, ASP.NET, Ajax, Ajax Toolkit</span></div>

                            <ul class="responsible">
                                <li>Worked on a team to develop an Ajax enabled web application to register for web server space.</li>
                                <li>Gained experience working with Ajax UpdatePanel control and Ajax Toolkit control’s, i.e. ValidatorCalloutExtender, ModalPopupExtender, and Accordian controls.</li>
                            </ul>
                        </li>

                        <li>
                            <h4><strong>Volt/Proclub (1/07-2/07)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span> C#, ASP.NET, M/S ACCESS, Reporting Services Control</span></div>
                            <ul class="responsible">
                                <li>Sole Designer, Developer and Tester of a smart client that exported invoice data from an M/S Access Database to QuickBooks.</li>
                                <li>Used type datasets and master/detail data bound grids and a five-step wizard to reduce the complexity for the end user.</li>
                                <li>Used the Reporting Service Control to allow the user to export a summary report to Excel or create a hard copy</li>
                                <li>Provided both a user and design guide with both guides available through the Help menu.</li>
                                <li>Completed the 3-week project 1 week early.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Volt/Proclub (9/06-12/06)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span> C#, ASP.NET, SQL, Reporting Services</span></div>
                            <ul class="responsible">
                                <li>Developed an internal reporting web portal using c#/ASP.net to access SQL Reporting Services Reports.</li>
                                <li>Developed SQL views, functions and stored procedures to be consumed by SQL Reporting Service’s Reports</li>
                                <li>Developed numerous SQL Reporting Services Reports</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Senior Software Contractor (3/06-7/06)</strong></h4>
                            <h4><strong>Excel/Boeing</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, XML Spy, XML DOM</span></div>
                            <ul class="responsible">
                                <li>Developed the decision logic object for a windows application that will be used by the airlines to configure the interior of the 787 airplanes. The decision logic is entered graphically by the Payloads Engineer using XML Spy. The code I wrote interprets the XML Schema produced by XML Spy to tell the User which hardware was selectable.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Senior Software Contractor (10/05-1/06)</strong></h4>
                            <h4><strong>Volt/ CyberSavvy (http://cybersavvy.biz)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, VB.NET, SQL2000, WIN2K Server, VB6, HTML, DHTML, JavaScript, vbscript</span></div>
                            <ul class="responsible">
                                <li>Developed registration site for Bill Gates’ yearly summit with the world’s top VIPs using ASP.Net 2.0 technologies. These technologies included typed datasets, datasource control, validation controls, custom web controls, data repeater, grid view, and Microsoft application blocks.</li>
                            </ul>
                        </li>

                        <li>
                            <h4><strong>Senior Software Contractor (10/03-8/04, 10/04-01/05, 3/05-8/05)</strong></h4>
                            <h4><strong>Volt/Microsoft (Redmond)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, C#, VB.NET, SQL2000, WIN2K Server, VB6, HTML, DHTML, JavaScript, vbscript</span></div>
                            <ul class="responsible">
                                <li>Developed new features for the internal M/S Market site using mostly C#, SQL Stored Procedures, XML, VB Script and ASP development skills.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Senior Software Contractor (2/03-6/03)</strong></h4>
                            <h4><strong>Volt/Microsoft (Redmond)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>C#, VB.NET, SQL2000, WIN2K Server, VB6, HTML, DHTML, JavaScript, vbscript</span></div>
                            <ul class="responsible">
                                <li>Replaced middle tier and back end software objects for Microsoft company wide employee time tracking software (OnTarget, MSTT) with C# web services. ∙ Developed a web-based (VB.Net) application for all employment agencies to use to fill Microsoft contingency staff positions (APTT).</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Senior Software Contractor (8/02-1/03)</strong></h4>
                            <h4><strong>CTS International/Boeing (Everett WA)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>ASP, SQL2000, WIN2K Server, VB6 , HTML, DHTML, JavaScript</span></div>
                            <ul class="responsible">
                                <li>Developed a company wide ASP/SQL 2000 web application for Boeing Engineers to enter their technical/project expertise and for Engineers to use to find others that have a specific technical/project expertise. Searches utilized the XML Explicit option in SQL2000 to return XML directly to the ASP pages.</li>
                                <li>Developed online suggestion system using ASP/SQL2000.</li>
                                <li>Developed S/W tool for airlines to use to safely transport live animals in the cargo bays.</li>
                            </ul>
                        </li>

                        <li>
                            <h4><strong>Senior Software Consultant (2/97-2/98) </strong></h4>
                            <h4><strong>Lante (Bellevue WA)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>XML, XSL, SQL6.5, SQL7.0, NT Server, VB6, ASP, Source Safe, ErWin, MTS, ADO, C , C, JavaScript, HTML, DHTML, M/S ACCESS</span></div>
                            <ul class="responsible">
                                <li>Developed an internal reconstitution tool for the Microsoft Legal Group to regenerate past Web pages that were once available on a Y2K Microsoft's web site. The tool was developed using stored procedures in SQL 7.0 to return ADO disconnected recordsets to both a VB user interface and active server pages.</li>
                                <li>Developed a VB6/MSMQ server application to process XML registration packages from the Microsoft Events Web Site and loads these registrations into a SQL database.</li>
                                <li>Developed a Microsoft funded Y2K resource CD that was customized for non-profit organizations. The user interface was developed using C and Window API calls.</li>
                                <li>Developed a localized demonstration of Microsoft's year 2000 web content for the Microsoft Global Summit using DHTML, JavaScript and visual basic script. A director level manager pitched the demonstration to an audience of 6000 individuals.</li>
                                <li>Developed simple to used SMTP and HTTP objects using MFC and Window API libraries for Custom Track's ZIX Mail application. This is a secured email application available for download over the Internet.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Software Developer - Integrated Systems Group (1/97 – 1/98)</strong></h4>
                            <h4><strong>Boeing (Renton WA)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>SQL6.0, M/S ACCESS, NT Server, UNIX, VB6, ASP, Source Safe, DAO, ADO, C , C, Fortran, JavaScript, HTML, DHTML, EXCEL</span></div>
                            <ul class="responsible">
                                <li>Developed a client/server application using VB/DAO to store and retrieve all of Boeing's Commercial Airplane Noise data in a single normalized relational database that is accessible throughout the company.</li>
                                <li>Developed an object oriented C program to numerically determine the sound propagation through air conditioning ducts using a finite element approach for the Boeing Co.</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Principal Engineer - Noise Reduction Group (1/86 –1/97)</strong></h4>
                            <h4><strong>Boeing (Renton WA)</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>M/S ACCESS, NT Server, UNIX, VB5, Source Safe, DAO, C , C, Fortran, JavaScript, HTML, DHTML, EXCEL</span></div>
                            <ul class="responsible">
                                <li>US patent for isolated aircraft flooring.</li>
                                <li>Awards for a concept to reduce costs of environmental system ducting that was implemented in all Boeing commercial aircraft.</li>
                                <li>Published in NOISE-CON professional journal.</li>
                                <li>Developed numerous technical tools in Fortran, C, VB and C</li>
                            </ul>
                        </li>
                        <li>
                            <h4><strong>Volunteer Activity (1997)</strong></h4>
                            <h4><strong>Woodland Park Zoo</strong></h4>
                            <div class="techEnviro">
                                <h4><strong>Technical Environment:</strong></h4><span>M/S ACCESS, WIN95, VB5</span></div>
                            <ul class="responsible">
                                <li>Developed an animal management database for the Woodland Park Zoo using Access 97.</li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="SeattlePic"></div>
    <section class=" experiences">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle">Professional Certificates/Education</div>

                    <ul class="certificates">
                        <li>Microsoft Certified Solution Developer</li>
                        <li>Graduate of University of Washington's C++ certificate program</li>
                        <li>Certified Professional Engineer (Mechanical Engineering)</li>
                        <li>Mechanical Engineering BS From Texas A&amp;M University</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <a class="anchor" id="a-contact"></a>
    <section style="margin-bottom:30px;">
        <div class="container">
            <div class="sectionTitle">Contact Me</div>
            <div class="row">
                <div class="col-md-12" <?php echo (MailErr::$Status===MailStatus::NotSentYet ? " style='display:none;'" : "") ?>>

                    <div class="alert alert-success" <?php echo (MailErr::$Status===MailStatus::Successful ? "" : " style='display:none;'" ) ?>><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent.</strong></div>
                    <div class="alert alert-danger" <?php echo (MailErr::$Status===MailStatus::Failed ? "" : " style='display:none;'" ) ?>>
                        <span class="glyphicon glyphicon-alert"></span><strong> Error! <?= MailErr::Message();  ?></strong></div>
                </div>
                <form id="contactForm" role="form" action="#a-contact" method="post">
                    <div class="col-lg-offset-3 col-lg-6 col-sm-12">

                        <div class="form-group">
                            <label for="InputName">Your Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span></div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Your Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span></div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Project Description</label>
                            <div class="input-group">
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Project Description" required></textarea>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>

                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputReal" id="InputReal" data-equals="7" required />
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok "></i></span>

                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right" />
                        </div>
                        <div class="form-group" style="width:100%;clear:both;">
                            <span><em><i class="glyphicon glyphicon-ok "></i> Required Field</em></span>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>



    <div id="mePic"></div>



    <script type="text/javascript">
        $(document).ready(function() {


            $('#contactForm').validator({
                custom: {
                    equals: function($el) {
                        var matchValue = $el.data("equals") // foo
                            //empty string test
                        if (!$el.val())
                            return;
                        if ($el.val() != matchValue) {
                            return "Hey, that's not valid! It's gotta be " + matchValue
                        }
                    }
                }
            });


            function loadSkillgraph() {
                $(".skillData").each(function(index, element) {
                    // element == this
                    var mydata = $(element).data();
                    var cnt = 0;

                    //recursive call with a time delay so user can see graph draw.
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
            });

            // Closes the Responsive Menu on Menu Item Click
            $('.navbar-collapse ul li a').click(function() {
                $('.navbar-toggle:visible').click();
            });

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

    <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
