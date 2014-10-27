<!-- Theme styles START -->
<link href="<?php echo base_url() ?>inc/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
<!-- Theme styles END -->

<!--slider-->
<?php $this->load->view("frontend/include/slider.view.php"); ?>

<div class="main">
    <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <form action="#" method="post">
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>Asal / <em>Departure</em></span>
            </div>
            <div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Masukkan Daerah Asal Anda" name="asal" />
                </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>Tujuan / <em>Destination</em></span>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Masukkan Daerah Tujuan Anda" name="tujuan" />
            </div>
        
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>Temukan / <em> Find</em></span>
            </div>
            <div class="form-group">
                    <a  class="btn blue" name="cari"><i class="fa fa-search"></i> Temukan Rute Wisata anda</a>
            </div>
          </div>
        </div>
        </form>
        <!-- END SERVICE BOX -->
        
        
        
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
    
    </div>
</div>