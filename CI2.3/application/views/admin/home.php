<div class="wrapper">

			    <!-- Breadcrumbs line -->
			    <div class="crumbs">
		            <ul id="breadcrumbs" class="breadcrumb"> 
		                <li><a href="index-2.html">Dashboard</a></li>
		                <li class="active"><a href="calendar.html" title="">Calendar</a></li>
		            </ul>
			        
		            <ul class="alt-buttons">
		                <li><a href="#" title=""><i class="icon-signal"></i><span>Stats</span></a></li>
		                <li><a href="#" title=""><i class="icon-comments"></i><span>Messages</span></a></li>
		                <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Tasks</span> <strong>(+16)</strong></a>
		                	<ul class="dropdown-menu pull-right">
		                        <li><a href="#" title=""><i class="icon-plus"></i>Add new task</a></li>
		                        <li><a href="#" title=""><i class="icon-reorder"></i>Statement</a></li>
		                        <li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
		                	</ul>
		                </li>
		            </ul>
			    </div>
			    <!-- /breadcrumbs line -->

			    <!-- Page header -->
			    <div class="page-header">
			    	<div class="page-title">
				    	<h5>Dashboard</h5>
				    	<span>Good morning, <?php echo $_SESSION['username']?></span>
			    	</div>

			    	<ul class="page-stats">
			    		<li>
			    			<div class="showcase">
			    				<span>New visits</span>
			    				<h2>22.504</h2>
			    			</div>
			    			<div id="total-visits" class="chart">10,14,8,45,23,41,22,31,19,12, 28, 21, 24, 20</div>
			    		</li>
			    		<li>
			    			<div class="showcase">
			    				<span>My balance</span>
			    				<h2>$16.290</h2>
			    			</div>
			    			<div id="balance" class="chart">10,14,8,45,23,41,22,31,19,12, 28, 21, 24, 20</div>
			    		</li>
			    	</ul>
			    </div>
			    <!-- /page header -->

			    <!-- Action tabs -->
			    <div class="actions-wrapper">
				    <div class="actions">

				    	<div id="user-stats">
					        <ul class="round-buttons">
					            <li><div class="depth"><a href="#" title="Add new post" class="tip"><i class="icon-plus"></i></a></div></li>
					            <li><div class="depth"><a href="#" title="View statement" class="tip"><i class="icon-signal"></i></a></div></li>
					            <li><div class="depth"><a href="#" title="Media posts" class="tip"><i class="icon-reorder"></i></a></div></li>
					            <li><div class="depth"><a href="#" title="RSS feed" class="tip"><i class="icon-rss"></i></a></div></li>
					            <li><div class="depth"><a href="#" title="Create new task" class="tip"><i class="icon-tasks"></i></a></div></li>
					            <li><div class="depth"><a href="#" title="Layout settings" class="tip"><i class="icon-cogs"></i></a></div></li>
					        </ul>
				    	</div>

				    	<div id="quick-actions">
				    		<ul class="statistics">
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="blue-square"><i class="icon-plus"></i></a>
					    				<strong>12,476</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 60%;"></div></div>
									<span>User registrations</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="red-square"><i class="icon-hand-up"></i></a>
					    				<strong>621,873</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 20%;"></div></div>
									<span>Total clicks</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="purple-square"><i class="icon-shopping-cart"></i></a>
					    				<strong>562</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 90%;"></div></div>
									<span>New orders</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="green-square"><i class="icon-ok"></i></a>
					    				<strong>$45,360</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 70%;"></div></div>
									<span>General balance</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="sea-square"><i class="icon-group"></i></a>
					    				<strong>562K+</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 50%;"></div></div>
									<span>Total users</span>
				    			</li>
				    			<li>
				    				<div class="top-info">
					    				<a href="#" title="" class="dark-blue-square"><i class="icon-facebook"></i></a>
					    				<strong>36,290</strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 93%;"></div></div>
									<span>Facebook fans</span>
				    			</li>
				    		</ul>
				    	</div>

				    	<div id="map">
				    		<div id="google-map"></div>
				    	</div>

				    	<ul class="action-tabs">
				    		<li><a href="#user-stats" title="">Quick actions</a></li>
				    		<li><a href="#quick-actions" title="">Website statistics</a></li>
				    		<li><a href="#map" title="" id="map-link">Google map</a></li>
				    	</ul>
				    </div>
				</div>
			    <!-- /action tabs -->
				
				<div class="widget">
						<ul>
							<li><?php echo anchor("admin/categories","MANAGER CATEGORIES"); ?></li>
							<li><?php echo anchor("admin/products","MANAGER PRODUCTS"); ?></li>
							<li><?php echo anchor("admin/users","MANAGER ADMINS"); ?></li>
						</ul>
				</div>
				
				
		    	<!-- Search widget -->
		    	<form class="search widget" action="#">
		    		<div class="autocomplete-append">
			    		<ul class="search-options">
			    			<li><a href="#" title="Go to search page" class="go-option tip"></a></li>
			    			<li><a href="#" title="Advanced search" class="advanced-option tip"></a></li>
			    			<li><a href="#" title="Settings" class="settings-option tip"></a></li>
			    		</ul>
			    		<input type="text" placeholder="search website..." id="autocomplete" />
			    		<input type="submit" class="btn btn-info" value="Search" />
			    	</div>
		    	</form>
		    	<!-- /search widget -->

		    

                <h5 class="widget-name"><i class="icon-reorder"></i>Options bar</h5>

		    	<!-- Options bar -->
		    	<div class="widget">
		    		<ul class="options-bar">
		    			<li>
			    			<div class="bar-select pull-left">
				    			<span>Sorting: </span>
				                <select name="select2" class="styled">
				                    <option value="opt1">Sort by date</option>
				                    <option value="opt2">Sort by time</option>
				                    <option value="opt3">Sort by category</option>
				                    <option value="opt4">Sort by size</option>
				                </select>
				            </div>

		                    <div class="loading pull-left">
		                        <span>Updating list</span>
		                        <img src="<?php echo base_url() ?>template/img/elements/loaders/6s.gif" alt="" />
		                    </div>
		    			</li>
		    			<li class="bar-entries">
		    				<span>Showing 8 of 1290 entries &nbsp;&nbsp;/&nbsp;&nbsp; New entries: <strong class="">+12</strong></span>
		    			</li>
		    			<li>
				    		<div class="pull-right bulk">
				    			<div class="bar-select">
					    			<span>Bulk actions: </span>
					                <select name="select2" class="styled">
					                    <option value="opt1">Edit</option>
					                    <option value="opt2">Unpublish</option>
					                    <option value="opt3">Publish</option>
					                    <option value="opt4">Move to trash</option>
					                </select>
					            </div>

					            <div class="bar-button">
					            	<button type="button" class="btn btn-info">Apply</button>
					            </div>
				    		</div>
		    			</li>
		    		</ul>
		    	</div>
		    	<!-- /options bar -->


		    	<h5 class="widget-name"><i class="icon-th"></i>Grid gallery items</h5>

                <!-- With titles -->
				<div class="media row-fluid">
				
				</div>
                <!-- /with titles -->


		    	<h5 class="widget-name"><i class="icon-th"></i>Media table</h5>

                <!-- Media datatable -->
                <div class="widget">
                	
                </div>
                <!-- /media datatable -->

                <div class="row-fluid">
                	<div class="span6">

						<!-- Simple chart -->       
			            <div class="widget">
			            	
			            </div>
			            <!-- /simple chart -->

                        <!-- Pre, code -->
                        <div class="widget">
                            <div class="navbar"><div class="navbar-inner"><h6>Pre, code styles</h6></div></div>
                            <div class="well body">

									<pre class="pre-scrollable prettyprint linenums">
									&lt;dl class="dl-horizontal"&gt;
									  &lt;div class="well-white">
									    &lt;blockquote>
									      &lt;p>Lorem ipsum.&lt;/p>
									      &lt;small>Someone famous&lt;/small>
									    &lt;/blockquote>
									  &lt;/div>
									&lt;/div>
									
									&lt;div class="well-white body semi-block">
									  &lt;blockquote class="pull-right">
									    &lt;p>Lorem ipsum.&lt;/p>
									    &lt;small>Someone famous&lt;/small>
									  &lt;/blockquote>
									&lt;/div>
									</pre>         

                            </div>
                        </div>                                
                        <!-- /pre, code -->

                	</div>

                	<div class="span6">

		                <!-- Calendar -->
		                <div class="widget">
							
		                </div>
		                <!-- /calendar -->

                	</div>
                </div>



		    </div>