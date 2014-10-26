<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<?php $this->load->view("admin/include/meta.view.php") ?>
<?php $this->load->view("admin/include/css.view.php") ?>
<?php $this->load->view("admin/include/js.view.php") ?>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content">

<?php $this->load->view("admin/include/header.view.php") ?>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php $this->load->view("admin/include/sidebar.view.php") ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<?php $this->load->view("admin/include/pageheader.view.php") ?>
			<!-- BEGIN DASHBOARD STATS -->
			
            <?php $this->load->view($konten); ?>
            
	<!-- END CONTENT -->
	<?php $this->load->view("admin/include/quicksidebar.view.php") ?>		
</div>
<!-- END CONTAINER -->
<?php $this->load->view("admin/include/footer.view.php") ?>
</body>
<!-- END BODY -->
</html>