<!-- Homepage Template -->
        <div class="col-md-12"><!-- Main Content Area -->
          <div class="row" id="banner">
        <div class="row" id="header">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img class="img-responsive" src="img/logo.png" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">&nbsp;</div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div id="heading">
              <h1><?php echo $meta_title;?></h1>
            </div>
            <div id="subtitle" class="visible-lg visible-md">
              <p>“But you are a chosen people, a royal priesthood, a holy nation, a people belonging to God, that you may declare the praises of him who called you out of darkness into his wonderful light” <br>1 Peter2:9</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- Marquee Section Begins here -->
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 marqueeSection" style="background: #000;">
        <div class="row " id="marquee">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo base_url('img/marquee/marquee_1.jpg'); ?>" alt="firstslide">
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
          <!-- Marquee for Eastern Gate Ministries ends here-->
          <!-- Main Body and Sidebar starts here -->
      <div class="row" id="bodyContent">
        <div class="col-lg-8 col-md-8">
          <?php echo $content; ?>
        </div>
        <!-- Sidebar starts here -->
        <div class="col-lg-4 col-md-4" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Gallery</a>
            <p>Visit our <?php echo anchor('gallery', 'Gallery'); ?> page for more pictures, media on how the Lord is using the church to reach out to the world.</p>
            <?php if(isset($artworks)): ?>
                 <?php echo artwork_links($artworks); ?> 
             <?php else: ?>
                  <p><?php echo "Currently There are no Artworks"; ?></p>
             <?php endif; ?>
          </div>
          <hr>
          <div class="list-group">
            <a href="#" class="list-group-item active">TV Media</a>
            <p>This section covers all the recent News/Updates/ TV schedules of our Media Ministry</p>
            <?php if(isset($media_photos)): ?>
                 <?php echo artwork_links($media_photos); ?> 
             <?php else: ?>
                  <p><?php echo "Currently There are no Artworks"; ?></p>
             <?php endif; ?>
          </div>
          <hr>
          <div class="list-group">
            <a href="#" class="list-group-item active">Contact Us</a>
            <p>Please feel free to contact us by <?php echo anchor('contactus', 'Clicking here'); ?>. You can also visit our church at the below address:</p>
            <p><?php echo web_address(); ?> </p>
          </div>
        </div>
      </div>
      