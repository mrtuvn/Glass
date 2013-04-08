<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" href="<?php echo base_url()?>template/css/admin/admin2.css" type="text/css" media="screen" charset="utf-8" /> 
		 
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
		
		
		
	</head>
<body>
	<div style="clear:both;"></div>

<div id="login_container">
		<h2> Please login to Access the Dashboard </h2> 
			<div id="login">
				<div id="login_header">
					<h2>Login</h2>
				</div>
				<div id="login_content">

					<form class="login-form" action="<?php echo site_url()?>/admin" method="post">
						<ul>
							<li>
								<label>Username:</label>
								<input type="text" name="username" />
							</li>
							
							<li>
								<label>Password:</label>
								<input type="password" name="password" />
							</li>
							
							<li>
									<?php 
										if ($this->session->flashdata('error')){ 
										echo " <div class='message' style='color: red;'> ";
										echo $this->session->flashdata('error');
										echo " </div> ";
										}
									?>
							</li>
							<li class="clearfix">
								<button type="submit" value="Login" >Login</button>
							</li>
						</ul>
					</form>
					
				</div>
			</div>
			<a href="<?php echo site_url()?>">Back to homepage</a>
		 <!-- 	<a href="#" class="right">Forgotten your password?</a> -->
</div>

</body>
</html>

