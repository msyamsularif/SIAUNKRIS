<!DOCTYPE html>
<!-- 
	Tampilan Khusus Prodi
-->
<html lang="en">
<!-- begin::Head -->

<head>
<?php require "../partials/_head.php" ?>
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		 <?php $this->load->view('dashboard/partials/_header.php'); ?>
		<!-- END: Header -->
		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
				<i class="la la-close"></i>
			</button>
			<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
				<!-- BEGIN: Aside Menu -->
					<?php $this->load->view('dashboard/partials/_asidemenu.php'); ?>
				<!-- END: Aside Menu -->
			</div>
			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<!-- BEGIN::CONTENT -->
					<?php $this->load->view('dashboard/prodi/content_prodi_input.php'); ?>
				<!-- END::CONTENT -->
			</div>
		</div>
		<!-- end:: Body -->
		<!-- begin::Footer -->
		  <?php $this->load->view('dashboard/partials/_fotter.php'); ?>
		<!-- end::Footer -->
	</div>
	<!-- end:: Page -->
	<!-- begin::Quick Sidebar -->
		  <?php $this->load->view('dashboard/partials/_quicksidebar.php'); ?>
	<!-- end::Quick Sidebar -->
	<!-- begin::Scroll Top -->
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->
	<!-- begin::Quick Nav -->
		  <?php $this->load->view('dashboard/partials/_quicknav.php'); ?>
	<!-- end::Quick Nav -->
	<!--begin::Base Scripts -->
	<script src="<?php echo base_url(); ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Base Scripts -->
</body>
<!-- end::Body -->

</html>