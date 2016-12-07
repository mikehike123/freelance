<?php
    ob_start(); 
    
?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="css/portfolioDetails.css" rel="stylesheet" />
    <style>
        tab-pane img {
            width: 100%;
            overflow-y: scroll;
        }

    </style>
    <div class="container">

        <div class="row" style="">
            <div class="col-lg-offset-3 col-lg-6 ">
                <ul class="pager">
                    <li><a href="portfolioWedding.php">❮ Previous Project</a></li>
                    <li><a href="portfolioMikesBikes.php">Next Project  ❯</a></li>
                </ul>
                <ul class="pager">
                    <li><a href="index.php#a-work">Back To Home</a></li>
                </ul>
            </div>
        </div>
        <div class="card">

            <h3 class="product-title">Relentless Recruiting</h3>
            <div class="container-fliud">

                <div class="wrapper row">
                    <div class="preview col-lg-5">
                        <div class="hidden-xs preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <h4 class="price">Mobile View:</h4>
                                <img src="img/mobile_screen_shots/kelly.png" />
                            </div>
                        </div>


                    </div>
                    <div class="details col-md-6">
                        <h4 class="price">Overview:</h4>
                        <p class="product-description">Created a single page website from scratch for a new Recruiting company. I had help with the Logo.</p>
                        <h4 class="price">Technology Used:</h4>
                        <p class="vote"><strong><em>html, bootstrap</em></strong></p>
                        <p><a href="http://r-recruitingusa.com/" target="_blank" class="whiteButton">Go To Live Site<span class="glyphicon glyphicon-share-alt"></span></a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
