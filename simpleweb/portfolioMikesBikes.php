<?php
    ob_start(); 
    
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="css/portfolioDetails.css" rel="stylesheet" />
<style>
    tab-pane img
    {
        width:100%;
        overflow-y: scroll;
    }
</style>
	<div class="container">
        
        <div class="row" style="">
                <div class="col-lg-offset-3 col-lg-6 ">
                    <ul class="pager">
                        <li><a href="portfolioDetails.php">❮ Previous Project</a></li>
                        <li><a href="index.php#a-work">Back To Home</a></li>
                        <li><a href="#">Next Project  ❯</a></li>
                    </ul>
                </div>
            </div>
		<div class="card">
    <h3 class="product-title">Mike's Used bikes</h3>
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="preview col-lg-5">
                <div class="hidden-xs preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1">
                        <h4 class="price">Mobile View:</h4>
                        <iframe src="http://www.vintagebikes.mossycity.com/" style="width:375px;height:600px"></iframe>
                    </div>
                </div>
            </div>
            <div class="details col-md-6">
                <h4 class="price">Overview:</h4>
                <p class="product-description">For my vintage bike business I created a Wordpress site from scratch. I add new bikes in the admin section as a custom post type.</p>
                <h4 class="price">Technology Used:</h4>
                <p class="vote"><strong><em>html, bootstrap, WordPress</em></strong></p>
            </div>
        </div>
    </div>
</div>
  <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
