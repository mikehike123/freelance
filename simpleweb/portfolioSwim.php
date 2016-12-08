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
                    <li><a href="portfolioMikesBikes.php">❮ Previous Project</a></li>
                    <li><a href="portfolioWedding.php">Next Project  ❯</a></li>
                </ul>
                <ul class="pager">
                    <li><a href="index.php#a-work">Back To Home</a></li>
                </ul>
            </div>
        </div>
        <div class="card">
            <h3 class="product-title">Swim Admin</h3>
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-9">
                        <div class="hidden-xs preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <img src="img/swim/instructor.png" />
                            </div>
                        </div>
                    </div>
                    <div class="details col-md-3">
                        <h4 class="price">Overview:</h4>
                        <p class="product-description">Created using the Laravel php framework. The application controls access to it's various features by assigning security roles to users. For example swim instructors would be permitted to evaluate swimmers based on existing skill types but would not be able to add new skills types. In contrast, swim admins could add new skill types but 
                        <h4 class="price">Technology Used:</h4>
                        <p class="vote"><strong><em>html, bootstrap, Laravel</em></strong></p>
                    </div>

                </div>

                <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
