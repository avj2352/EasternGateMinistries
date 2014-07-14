<!-- News Archive Template -->
        <div class="col-md-8"><!-- Main Content Area -->

          <h2><?php echo $meta_title; ?> - Articles</h2>
          <hr>
            <?php echo $content; ?>
            <hr>
           <?php if($pagination): ?>
             <section class="pagination"><?php echo $pagination; ?></section>
           <?php endif; ?> 
          <div class="row">
            <?php  if(count($articles)): foreach ($articles as $article):?>
                <article class="col-lg-12"><?php echo get_excerpt($article); ?><hr></article>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        <?php if($pagination): ?>
             <section class="pagination"><?php echo $pagination; ?></section>
           <?php endif; ?> 
           <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <div class="col-md-4"><!-- Sidebar Area -->
          <div class="well">
            <ul class="list-group">
              <li class="list-group-item">
                  <div style="font-size:18px;">Reach out to us</div>
              </li>
            </ul>
             <p><?php echo mailto('info@innovoskies.com', '<span class="glyphicon glyphicon-user"></span> info@innovoskies.com'); ?></p>
             <hr> 
              <p><span class="glyphicon glyphicon-road">&nbsp;</span><strong>Address</strong></p>
              <p><?php echo web_address(); ?></p>
              <hr>
              <div class="well"><?php echo google_map(); ?></div>
              <p><span class="glyphicon glyphicon-earphone">&nbsp;</span><strong>Call us</strong></p>
              <p><ul>
                <li>+91-9986355650</li>
                <li>+91-9632168629</li>
              </ul></p>
          </div><!-- End of the Sidebar -->
        </div><!-- Sidebar ends here -->
<!-- News Archive Template -->        