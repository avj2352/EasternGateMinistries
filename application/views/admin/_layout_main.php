<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <header class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url('admin/dashboard');  ?>" class="navbar-brand">Eastern Gate Ministries</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li><?php echo anchor('admin/dashboard', 'Dashboard'); ?></li>
            <li><?php echo anchor('admin/user', 'Users'); ?></li>
            <li><?php echo anchor('admin/page', 'Pages'); ?></li>
            <li><?php echo anchor('admin/page/order', 'Order Pages'); ?></li>
            <li><?php echo anchor('admin/gallery', 'Gallery'); ?></li>
            <li><?php echo anchor('admin/article', 'Articles'); ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('admin/user/logout', 'Logout', 'style="cursor:pointer;"'); ?></li>
          </ul>
        </div>
      </div>
    </header>		
    	<div id="homepage" class="container">
      <!-- Homepage area -->
      
      <div class="row" id="mainBody">
        <!-- Marquee for Eastern Gate Ministries -->
      <div id="bodyContent">
        <div class="col-lg-7 col-md-7">
          <article>
            <?php $this->load->view($subview); ?>
          </article>
        </div>
        <div class="col-lg-1 col-md-1">&nbsp;</div>
        <div class="col-lg-4 col-md-4">
          <div id="sidebar">
            <article>
              <h3>Gallery</h3>
              <p>Visit out Gallery for Images, Videos, TV shows and Media. Read more...</p>
              
              <div>&nbsp;</div>
            </article>
            <hr>
            <hr>
            <article>
              <h3>TV Shows</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, sunt eligendi deleniti veritatis rem!</p>
              
            </article>
          </div>
        </div>
      </div>
        
    </div>
      <!-- Homepage area -->
          </div>

<?php $this->load->view('admin/components/page_tail'); ?>            
