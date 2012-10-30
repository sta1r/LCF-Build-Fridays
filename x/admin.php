<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Platform X | Francesca Smith Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="">

	

  </head>

<body>

<?php include('lib/navbar.php'); ?>

	<div class="container-fluid">
		<div class="row-fluid">
			<!-- Main user biographical info -->
			<header class="span12">
				<div class="row-fluid add-bottom">
					<div class="span4">
						<h1>Platform X admin</h1>
					</div>
					<div class="span3 offset5 alignright">
						<a href="#" class="btn btn-info">Export</a>
						<a href="#" class="btn btn-info">Bulk email</a>
					</div>
				</div>
			</header>
		</div>	
		<div class="row-fluid">	
			<section class="span12">
   
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#dashboard">Dashboard</a></li>
				  <li><a href="#students">Students</a></li>
				  <li><a href="#settings">Settings</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="dashboard">
						<div class="row-fluid">
							<div class="span4">
								
								<h4><i class="icon-tasks"></i> Quick stats (since you last logged in)</h4>
								<ul>
									<li><strong>264</strong> unique visitors</li>
									<li><strong>62</strong> likes</li>
									<li><strong>12</strong> enquiries logged</li>
								</ul>	
							</div>
							
							<div class="span4">
								<h4><i class="icon-envelope"></i> In-tray</h4>
								<ul>
									<li><strong>12</strong> students registered interest in placements</li>
									<li><strong>5</strong> students applied for jobs</li>
									<li><strong>3</strong> new jobs are in your moderation queue</li>
								</ul>		
							</div>	
						
						</div>
					</div><!-- .tab-pane -->
									
				  <div class="tab-pane" id="students">
						<h3>Students</h3>
					
						<div id="control-bar" class="row-fluid">
							<div class="span10">
								<div class="well clearfix">
									<div class="control pull-left">
										<p>Sort by:</p>
										<div class="btn-group">
										  <button class="btn">Name</button>
										  <button class="btn">Course</button>
										</div>
									</div>	
									<div class="control pull-left">
										<p>Filter by:</p>
										<div class="btn-group">
										  <button class="btn">Year 1</button>
										  <button class="btn">Year 2</button>
										  <button class="btn">Year 3</button>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span10">
				  			<div id="students-list"></div>
								
								<div class="pagination">
								  <ul>
								    <li class="disabled"><a href="#">Prev</a></li>
								    <li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
								    
								  </ul>
								</div>
				  		</div>
							
				
						</div>
					</div><!-- .tab-pane -->
						
				  <div class="tab-pane" id="projects">
				  	<h3>Placements</h3>
						
						<div class="row-fluid">
							<div class="span8">
							
								<div class="relative">
								<h5>Your placements</h5>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Title</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Abercrombie & Fitch (design)</td>
											<td>July 2012</td>
										</tr>
										<tr>
											<td>Debenhams retail</td>
											<td>Christmas 2011</td>
										</tr>
									</tbody>
								</table> 
								<div class="edit-control"><a class="btn btn-primary btn-small">Edit</a></div>
								</div>
								<hr>
								
							<h5>Currently available</h5>
							<div id="placements-list">
								<table class="table table-striped"><thead><tr><th>Title</th><th>Location</th><th>Payment</th><th>Duration</th></tr></thead><tbody><tr><td>Abercrombie & Fitch (design)</td><td>Greater London</td><td>Unpaid</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small" data-role="save-item">Save</button></td><td><button class="btn btn-primary btn-small">Register interest</button></td></tr><tr><td>Brand Assistant</td><td>Greater London</td><td>Store vouchers</td><td>2 weeks</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small" data-role="save-item">Save</button></td><td><button class="btn btn-primary btn-small">Register interest</button></td></tr><tr><td>Fashion Design Assistant </td><td>Others</td><td>Negotiable</td><td>6 weeks</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small" data-role="save-item">Save</button></td><td><button class="btn btn-primary btn-small">Register interest</button></td></tr><tr><td>Print Design Assistant </td><td>Others</td><td>Negotiable</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small" data-role="save-item">Save</button></td><td><button class="btn btn-primary btn-small">Register interest</button></td></tr><tr><td>Debenhams (retail)</td><td>Greater London</td><td>Expenses paid</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small" data-role="save-item">Save</button></td><td><button class="btn btn-primary btn-small">Register interest</button></td></tr></tbody></table> 
						</div>
						</div>
						<aside class="span3 offset1">
							<div class="well">
								<h4>You are interested in:</h4>
								<p><i class="icon-star"></i> <a href="#">Designer at Mr Porter</a> <button class="btn btn-mini">Remove</button></p>
								<p><i class="icon-star"></i> <a href="#">Office assistant at Debenhams</a> <button class="btn btn-mini">Remove</button></p>
							</div>	
						</aside>
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