<?php 
include('lib/header.php');
include('lib/navbar.php'); 
?>

	<div class="container-fluid">
		<div class="row-fluid">
			<!-- Main user biographical info -->
			<header class="span12">
				<div class="row-fluid add-bottom">
					<div class="span4">
						<h1>Platform X resources</h1>
					</div>
					<div class="span3 offset5 alignright">
						
					</div>
				</div>
			</header>
		</div>	
		<div class="row-fluid">	
			<section class="span12">
   
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#dashboard">Latest</a></li>
				  <li><a href="#">Saved</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="latest">

						<div class="row-fluid">
							<h3>Screencasts</h3>
						</div>
						<div class="row-fluid">
							
							<div class="span3">
								<img src="img/cv-grab.jpg">
								<h5>Crafting the perfect CV</h5>
							</div>
							<div class="span3">
								<img src="img/cv-grab.jpg">
								<h5>Excel: mastering the pivot table</h5>
							</div>
							<div class="span3">
								<img src="img/cv-grab.jpg">
								<h5>Harness the power of social media</h5>
							</div>
						</div>
						<hr>
						<div class="row-fluid">
							<h3>Presenting yourself online</h3>
						</div>
						<div class="row-fluid">
							
							<div class="span4">
								<img src="img/ted-grab.jpg">
								<h5>Starting your own fashion label</h5>
							</div>
							<div class="span4">
								<img src="img/ted-grab2.jpg">
								<h5>Unravelling the supply chain</h5>
							</div>
							<div class="span4">
								<img src="img/ted-grab.jpg">
								<h5>Selling your work online</h5>
							</div>
						</div>
						<hr>
						<div class="row-fluid">
							<h3>Business and entrepreneurship</h3>
						</div>
						<div class="row-fluid">
							
							<div class="span4">
								<img src="img/ted-grab2.jpg">
								<h5>Starting your own fashion label</h5>
							</div>
							<div class="span4">
								<img src="img/ted-grab.jpg">
								<h5>Unravelling the supply chain</h5>
							</div>
							<div class="span4">
								<img src="img/ted-grab2.jpg">
								<h5>Selling your work online</h5>
							</div>
						</div>
					</div><!-- .tab-pane -->
									
				  <div class="tab-pane" id="students">
						<h3>Students</h3>
					
						<div class="control-bar row-fluid">
							<div class="span10">
								<div class="well clearfix">
									<div class="control pull-left">
										<p>Sort by:</p>
										<div class="btn-group">
										  <button class="btn">Name</button>
										  <button class="btn">Course</button>
											<button class="btn">Last logged in</button>
										</div>
									</div>	
									<div class="control pull-left">
										<p>Filter by:</p>
										<div class="btn-group">
										  <button class="btn">Filter</button>
										  <button class="btn dropdown-toggle" data-toggle="dropdown">
										    <span class="caret"></span>
										  </button>
										  <ul class="dropdown-menu">
										    <li><a href="#">Year 1</a></li>
												<li><a href="#">Year 2</a></li>
												<li><a href="#">Year 3</a></li>
												<li class="divider"></li>
												<li><a href="#">Alumni</a></li>	
										  </ul>
										</div>
									</div>
									<div class="control pull-left">
										<p>Profile search:</p>
										<form class="form-search">
										  <input type="text" class="input-medium search-query">
										  <button type="submit" class="btn">Search</button>
										</form>
									</div>
									<div class="control pull-right">
										<p>With selection:</p>
										<a href="#" class="btn btn-info">Export</a>
										<a href="#" class="btn btn-info">Bulk email</a>
									</div>	
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span10">
				  			<div id="students-list"></div>
								
								<?php include('elements/pagination.php'); ?>
								
				  		</div>
							
				
						</div>
					</div><!-- .tab-pane -->
						
				  <div class="tab-pane" id="placements">
				  	<h3>Placements</h3>
						<div class="control-bar row-fluid">
							<div class="span10">
								<div class="well clearfix">
									<div class="control pull-left">
										<label>Sort by:</label>
										
									</div>	
									<div class="control pull-left">
										<div class="btn-group">
										  <button class="btn">Company</button>
										  <button class="btn">Role</button>
											<button class="btn">Interest</button>
										</div>
									</div>	
									<div class="control pull-left">
										<form class="form-search inline-form">
										  <input type="text" class="input-medium search-query">
										  <button type="submit" class="btn">Search</button>
										</form>
									</div>
									<div class="control pull-right">
										<button class="btn btn-primary">Add new</button>
									  
									</div>	
								</div>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span10">
							
								<div id="admin-placements-list"></div>
							
								<?php include('elements/pagination.php'); ?>
							
						</div>
						</div>
					</div><!-- .tab-pane -->
					
					<div class="tab-pane" id="network">
						<div id="network-feed"></div>
					</div>
				  <div class="tab-pane" id="settings">
						<div class="span6">
						...	
						</div>
				  </div>
				</div><!-- .tab-content -->

			</section>
			
			
		</div><!-- .row-fluid -->

    <hr>

    <footer class="row-fluid">
		<div class="span4">
			<ul class="nav">
         <li><a href="#">Privacy Policy</a></li>
         <li><a href="#">Terms &amp; Conditions</a></li>
       </ul>
		</div>
		<div class="span4">
			<ul class="nav">
         <li><a href="#">Help</a></li>
         <li><a href="#">Guidelines and IP</a></li>
       </ul>
		</div>
      <p class="pull-right">© London College of Fashion 2012</p>
    </footer>

  </div> <!-- /container-fluid -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
  

</body></html>