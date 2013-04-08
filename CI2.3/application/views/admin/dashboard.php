<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>template/css/admin/bootstrap.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="<?php echo base_url() ?>template/css/admin/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript"> 
			//<![CDATA[
			base_url = '<?php echo base_url() ?>';
			//]]>
</script> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/prettify.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/ui/jquery.fullcalendar.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/forms/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/forms/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/plugins/tables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/functions/index.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>template/js/charts/graph.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/charts/chart1.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/charts/chart2.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/js/charts/chart3.js"></script>

</head>

<body>

	<!-- Fixed top -->
	<div id="top">
		
		<?php echo $this->load->view('admin/topfix'); ?>
	</div>
	<!-- /fixed top -->



	<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<?php echo $this->load->view('admin/sidebar');?>
		</div>
		<!-- /sidebar -->


		<!-- Content -->
		<div id="content">

		    <!-- Content wrapper -->
		    <?php echo $this->load->view("$main");?>
		    <!-- /content wrapper -->

		</div>
		<!-- /content -->

	</div>
	<!-- /content container -->


	<!-- Footer -->
	<div id="footer">
		<?php echo $this->load->view('admin/footer');?>
	</div>
	<!-- /footer -->

</body>
</html>
