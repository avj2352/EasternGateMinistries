<?php 

function get_marquee(){
  $string = '';
$string .='<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 marqueeSection" style="background: #000;">';
$string .='<div class="row" id="marquee">';
$string .='<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
$string .='<ol class="carousel-indicators">';
$string .='<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
$string .='<li data-target="#carousel-example-generic" data-slide-to="1"></li>';
$string .='<li data-target="#carousel-example-generic" data-slide-to="2"></li>';
$string .='</ol>';
$string .='<div class="carousel-inner">';
$string .='<div class="item active">';
$string .='<img src="'. echo base_url('img/marquee/marquee_1.jpg') . '" alt="firstslide">';
              <div class="carousel-caption">Welcome to Eastern Gate Ministries</div>
            </div>
            <div class="item">
              <img src="<?php echo base_url('img/marquee/marquee_2.jpg'); ?>" alt="secondslide">
              <div class="carousel-caption">Check out our articles for more word of God</div>
            </div>
            <div class="item">
              <img src="<?php echo base_url('img/marquee/marquee_3.jpg'); ?>" alt="thirdslide">
              <div class="carousel-caption">Today's scripture readings</div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-circle-arrow-right"></span>
          </a>
        </div>
      </div>
      </div>
}/*end of the marquee function*/      