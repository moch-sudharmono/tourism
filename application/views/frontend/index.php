<!DOCTYPE html>
<html lang="en">
<head>
	<!--meta and title-->
    <?php $this->load->view("frontend/include/meta.view.php") ?>
    <?php $this->load->view("frontend/include/css.view.php") ?>
    <?php $this->load->view("frontend/include/js.view.php") ?>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
	<!--style customizzer-->
	<?php //$this->load->view("frontend/include/style-customizerview.php") ?>
    
    <!--topbar-->
    <?php $this->load->view("frontend/include/topbar.view.php") ?>
    
    
    <!--header-->
	<?php $this->load->view("frontend/include/header.view.php") ?>
    
    <!--isi-->
    
    <?php $this->load->view($konten) ?>

    <!--footer-->
	<?php $this->load->view("frontend/include/footer.view.php") ?>
    
</body>
<!-- END BODY -->
</html>