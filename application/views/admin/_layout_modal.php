<?php $this->load->view('admin/components/page_head'); ?>
  <body>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
      <!-- Navbar finishes here -->
      <!-- Marquee for InnovoSkies -->
      <!-- Marquee for InnovoSkies ends here-->
      <!-- Homepage Body begins here -->
        <div class="col-md-12"><!-- Main Content Area -->

          <div class="modal show" role="dialog">
      <div class="modal-dialog">
              <div class="modal-content">

              <?php $this->load->view($subview); ?>

                <div class="modal-footer">
                  <p><span class="gold">&copy; <?php echo $meta_title; ?>, 2013</span></p>
                </div>
              </div>
            </div>
          </div><!-- End of the Modal Tag -->

        </div>
      <!-- End of the Homepage area -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
