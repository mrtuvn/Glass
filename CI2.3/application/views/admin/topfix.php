<div class="fixed">

			<a href="index-2.html" title="" class="logo"><img src="<?php echo base_url() ?>template/img/logo.png" alt="" /></a>
			<ul class="top-menu">
				<li><a class="fullview"></a></li>
				<li><a class="showmenu"></a></li>
				<li><a href="#" title="" class="messages"><i class="new-message"></i></a></li>
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><img src="<?php echo base_url() ?>template/img/userpic.png" alt="" /><span>Howdy, <?php echo $_SESSION['username']?> <b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" title=""><i class="icon-user"></i>Profile</a></li>
						<li><a href="#" title=""><i class="icon-inbox"></i>Messages<span class="badge badge-info">9</span></a></li>
						<li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
						<li><a href="<?php echo base_url()?>welcome/logout" title=""><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
</div>