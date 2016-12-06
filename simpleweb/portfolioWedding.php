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
                        <li><a href="portfolioSwim.php">❮ Previous Project</a></li>
                        <li><a href="index.php#a-work">Back To Home</a></li>
                        <li><a href="portfolioRelentless.php">Next Project  ❯</a></li>
                    </ul>
                </div>
                
            </div>
		<div class="card">
    <h3 class="product-title">Wedding CrowdFunding</h3>
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="preview col-lg-5">
                <div class="hidden-xs preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1">
                        <h4 class="price">Mobile View:</h4>
                        <?php include_once("loaderImg.html"); ?>
                        <iframe id="iframe1" src="http://wedding.mossycity.com/" style="width:375px;height:600px"></iframe>
                    </div>
                </div>
            </div>
            <div class="details col-md-6">
                <h4 class="price">Overview:</h4>
                <p class="product-description">I surprised my daughter with this site. Unfortunately, she felt the concept of crowd funding wedding gifts was tacky so the project was shelved.  However, I'm including it in my portfolio since it shows my skills.</p>
                <p class="product-description">The Wordpress template was made from scratch using bootstrap and html.  On the back-end I use a custom post type for the registery gifts.  
                
                <h4 class="price">Technology Used:</h4>
                <p class="vote"><strong><em>html, bootstrap, WordPress</em></strong></p>
                <p><a href="http://wedding.mossycity.com" target="_blank" class="whiteButton"  >Go To Live Site<span class="glyphicon glyphicon-share-alt"></span></a></p>
            </div>
        </div>
    </div>
</div>
  <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
