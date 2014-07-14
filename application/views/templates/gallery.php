<!-- Gallery Template -->
        <div class="col-md-12"><!-- Main Content Area -->

          <h1><?php echo $meta_title; ?> Gallery</h1>
          <hr>
            <p>Welcome to Our Gallery Section. All media/images of our church ministry are found below.</p>
            <p>&nbsp;</p>
            <div class="col-md-12">    
      <div class="content">
        <div id="rg-gallery" class="rg-gallery">
          <div class="rg-thumbs">
            <!-- Elastislide Carousel Thumbnail Viewer -->
            <div class="es-carousel-wrapper">
              <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
              </div>
              <div class="es-carousel">
                <ul>
                  <?php foreach($artworks as $art): ?>
                  <li><a href="#"><img src="<?php echo base_url('img/gallery/'.$art->path); ?>" alt="<?php echo $art->title; ?>" data-large="<?php echo base_url('img/gallery/'.$art->path); ?>" data-description="<?php echo strip_tags($art->description); ?>" 
                    width="70px" height="60px"></a></li>
                <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <!-- End Elastislide Carousel Thumbnail Viewer -->
          </div><!-- rg-thumbs -->
        </div><!-- rg-gallery -->
    <hr>
          <p><?php echo $content; ?></p>
      </div><!-- content -->
    </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
<!-- Gallery Template -->        