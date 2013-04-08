<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/styles.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/style2.css" type="text/css" media="screen" charset="utf-8" /> 
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/languageswitcher.css" type="text/css" media="screen" charset="utf-8" /> 
		
		<script type="text/javascript" src="<?php echo base_url()?>template/js/jquery-1.8.0.min.js"></script>
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script> -->
		<script type="text/javascript" src="<?php echo base_url()?>template/js/jquery.easing.js"></script> 
		<script type="text/javascript" src="<?php echo base_url()?>template/js/script.js"></script> 
		
		<title>
		<?php echo $title; ?>
		</title>
		<script type="text/javascript"> 
			//<![CDATA[
			base_url = '<?php echo base_url() ?>';
			//]]>
		</script> 
		<script type="text/javascript">
			 $(document).ready( function(){	
					var buttons = { previous:$('#jslidernews2 .button-previous') ,
									next:$('#jslidernews2 .button-next') };			 
					$('#jslidernews2').lofJSidernews( {     
												//direction: 'opacity',
												interval:2000,
											 	easing:'easeInOutQuad',
												duration:1200,
												auto:true,
												mainWidth:684,
												mainHeight:300,
												navigatorHeight		: 60, //100 
												navigatorWidth		: 310,
												maxItemDisplay:3,
												buttons:buttons
					} );

				// slide sidebar nav
				$("#nav-side .nav-item a").click(function(){
					//alert($(this).html());
					$(this).parent().children('.sub').slideToggle('slow');
				});
					
				
			});

		</script>
		
		
	</head>
<body>

<?php $this->load->view("top-header")?>

<div class="wrapper clearfix">

		<?php $this->load->view("header")?>
	
		<?php echo '<div class="content">' ?>
		
			<div class="sidebar">
				<?php $this->load->view('sidebar'); ?>	
			</div> <!-- sidebar -->
			
			<div class="site-content">
				
				<?php $this->load->view("$main")?>
				
			</div>
			
		<?php echo '</div>'?>
		
		<?php echo "<div class='clearfix'></div>"?>
	
	<div class="footer">
		<?php $this->load->view("footer")?>
	</div>

</div>

<!-- tweet -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- google+ -->
<script type="text/javascript">
(function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<!-- fb -->
<!-- toggle language box -->
<script type="text/javascript" src="<?php echo base_url()?>template/js/languageswitcher.js"></script>
<script type="text/javascript">
		$('input').click(function(){
			$(this).select();	
		});
</script>

</body>
</html>

	