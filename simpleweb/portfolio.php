<?php
    ob_start(); 
    
?>
    <link href="css/portfolio.css" rel="stylesheet" />
    <div class="container" style="margin-top:10px;">
        <div class="row form-group">
            <div class="col-xs-12 col-md-4" style="hieght:300px;">
                <div class="panel panel-default">
                    <div class="panel-image hide-panel-body">
                        <img src="img/kellywebbutton.png" class="panel-image-preview" />
                    </div>
                    
                    <div class="panel-footer text-center">
                        <h4>RELENTLESS RECRUITING</h4>
                        <a href="#share">See More<span class="glyphicon glyphicon-share-alt"></span></a>
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
                        <a href="#share">See More<span class="glyphicon glyphicon-share-alt"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-image hide-panel-body">
                        <img src="http://666a658c624a3c03a6b2-25cda059d975d2f318c03e90bcf17c40.r92.cf1.rackcdn.com/unsplash_52d09387ae003_1.JPG" class="panel-image-preview" />
                    </div>
                    <div class="panel-body">
                        <h4>Title of Image</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                    </div>
                    <div class="panel-footer text-center">
                        <h4>RELENTLESS RECRUITING</h4>
                        <a href="#share">See More<span class="glyphicon glyphicon-share-alt"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
            </div>
        </div>
    </div>

    <?php
    $body =ob_get_contents();
    ob_end_clean();
    include_once "template.php";
?>
