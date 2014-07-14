<footer>
      <div class="container">
        <!-- First Row -->
        <div class="row">
          <div class="col-lg-offset-9" style="position: relative; top:5px;">
            <a href="#">Home</a> | <a href="#">Gallery</a> | <a href="#">Contact Us</a></div>
          <hr>
        </div>
        <!-- Second Row -->
        <div class="row">
          <div class="col-xs-5">
            <ul>
              <li>Copyright 2014 Estern Gate Ministries&nbsp;&copy;.</li>
              <li>Web design by <a href="http://www.innovoskies.com" target="_blank">InnovoSies&nbsp;&copy;.</a></li>
              <li>Contact : info@easterngateministries.com | +91-9632168629 | +91-9986355650</li>
            </ul>
          </div>
        </div>
        <!-- Third Row -->
        <hr>
      </div>
    <!-- Homepage Body ends here -->
    <!-- /////////////////////////////////////////////////////////////////////////// -->
    </footer>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script>
    $('ul.nav li.dropdown a').hover(function(){
      $('ul.dropdown-menu').css('display','block');
    });

    $('ul.dropdown-menu').mouseleave(function(){
      $('ul.dropdown-menu').css('display', 'none');
    });

    $('ul.nav li.dropdown a').click(function(){
      var url = $(this).attr('href');
      // alert(url); 
      window.location=url;
    });
  </script>
  <?php if($this->uri->segment(1) == 'gallery'):?>
    <?php //TODO Gallery related Javascripts go here; ?>
      <script type="text/javascript" src="<?php echo base_url('js/jquery.tmpl.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('js/jquery.easing.1.3.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('js/jquery.elastislide.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('js/gallery.js'); ?>"></script>
    <?php endif; ?>
    <script>
        $('.carousel').carousel({
              interval: 5000
              });
    </script>
  </body>
</html>