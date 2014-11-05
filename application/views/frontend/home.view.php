<!--slider-->

<div class="main">
	<?php $this->load->view("frontend/include/slider.view.php"); ?>
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">

        <div class="content-page">
          <div class="row">
            
            <!-- Theme styles START -->
<link href="<?php echo base_url() ?>inc/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
<!-- Theme styles END -->





        
        <?php $this->load->view("frontend/home.search.view.php") ?>
        
        
        <!-- BEGIN STEPS -->
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
              <h2> Tujuan Wisata</h2>
              <p>Tentukan Tujuan Wisata Anda</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
              <h2>Transportasi</h2>
              <p>Pilih Moda Transportasi yang anda inginkan.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
              <h2>Petunjuk</h2>
              <p>Cetak petunjuk ke tempat tujuan anda.</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->
    	
        <?php $this->load->view("frontend/home/locationphotos.view.php") ?>
        
        <?php $this->load->view("frontend/home/promotion.view.php") ?>

                       
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>
