<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eastern Gate Ministries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('styles/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('styles/bootswatch.css'); ?>" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('styles/styles.css'); ?>"/>

    <!-- HTML5 shiv IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Gallery Page related imports -->
    <?php if($this->uri->segment(1) == 'gallery'):?>
    <?php //TODO import Gallery related scripts here! ?>
    <!-- Gallery related -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/gallery.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/elastislide.css'); ?>" />
        <!-- <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' /> -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' /> -->
        <noscript>
            <style>
                .es-carousel ul{
                    display:block;
                }
            </style>
        </noscript>
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">    
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>
        <!-- Gallery related -->
    <?php endif; ?>
    <!-- Gallery Page related imports ends here-->
    <!-- HTML5 shiv IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>