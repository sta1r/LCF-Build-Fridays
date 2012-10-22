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
					<div class="span2">
						<img src="img/joansmith.jpg">
					</div>
					<div class="span4">
						<h1><span id="name">Francesca Smith</span></h1>
					</div>
					<div class="span3 offset3 alignright">
						<a href="#" class="btn btn-large btn-success">Upload</a>
						<a href="profile.php" class="btn btn-large btn-info">View your profile</a>
					</div>
				</div>
			</header>
		</div>	
		<div class="row-fluid">	
			<section class="span12">
   
				<ul class="nav nav-tabs" id="myTab">
					<li class="active"><a href="#dashboard">Dashboard</a></li>
				  <li><a href="#profile">Profile</a></li>
				  <li><a href="#media">Media</a></li>
				  <li><a href="#jobs">Jobs</a></li>
				  <li><a href="#projects">Projects</a></li>
					<li><a href="#network">Network</a></li>
				  <li><a href="#settings">Settings</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="dashboard">
						<div class="row-fluid">
							<div class="span5">
								<h3>Welcome!</h3>
								<img src="img/editd-graph.png">
								<ul>
									<li>Your daily visitors since 1 July 2012</li>
								</ul>	
							</div>
							<div class="span3">
								<h4>Vital signs</h4>
								<p><i class="icon-eye-open"></i> Your profile has been viewed <strong>17</strong> times</p>
								<p><i class="icon-thumbs-up"></i> Your work has been liked <strong>6</strong> times</p>
								<p><i class="icon-envelope"></i> Your have received <strong>2</strong> enquiries</p>
							</div>
							<aside class="span3 offset1">
								<div class="well">
									<h4>Understanding your dashboard</h4>
									<ul>
										<li>What to do when you receive enquiries</li>
										<li>How to improve your profile to receive more visitors</li>
									</ul>	
								</div>	
							</aside>
						</div>
					</div><!-- .tab-pane -->
					
					<?php include('elements/tab-profile.php'); ?>

				  <div class="tab-pane" id="media">
				  	<h3>Your media</h3>
				 			<div class="row-fluid">
								<div class="span8">
									<div id="showtime-json" data-limit="50" data-url="http://showtime.arts.ac.uk/francescasmith.json">
										<div class="loader"></div>
										<ul class="thumb-list no-bullet"></ul>
									</div>
								</div>
								<aside class="span3 offset1">
									<div class="well">
										<h4>Media FAQs</h4>
										<ul>
											<li>Why is my image not showing?</li>
											<li>The colours in my image are wrong, how do I fix this?</li>
											<li>How do I upload video?</li>
										</ul>	
									</div>	
								</aside>	
				 		</div>
				  </div><!-- .tab-pane -->
				
				  <div class="tab-pane" id="jobs">
						<h3>Jobs</h3>
					
						<div class="row-fluid">
							<div class="span8">
								<h5>Latest jobs</h5>
				  			<div id="jobs-list"></div>
				
								<h5>Latest placements offered</h5>
								<div id="placements-list">
									<table class="table table-striped"><thead><tr><th>Title</th><th>Location</th><th>Payment</th><th>Duration</th></tr></thead><tbody><tr><td>Abercrombie & Fitch (design)</td><td>Greater London</td><td>Unpaid</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small">Save placement</button></td><td><button class="btn btn-primary btn-small">Apply</button></td></tr><tr><td>Brand Assistant</td><td>Greater London</td><td>Store vouchers</td><td>2 weeks</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small">Save placement</button></td><td><button class="btn btn-primary btn-small">Apply</button></td></tr><tr><td>Fashion Design Assistant </td><td>Others</td><td>Negotiable</td><td>6 weeks</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small">Save placement</button></td><td><button class="btn btn-primary btn-small">Apply</button></td></tr><tr><td>Print Design Assistant </td><td>Others</td><td>Negotiable</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small">Save placement</button></td><td><button class="btn btn-primary btn-small">Apply</button></td></tr><tr><td>Debenhams (retail)</td><td>Greater London</td><td>Expenses paid</td><td>1 month</td><td><button class="btn btn-info btn-small">View detail</button></td><td><button class="btn btn-small">Save placement</button></td><td><button class="btn btn-primary btn-small">Apply</button></td></tr></tbody></table> 
								</div>
								<p>Add jobs applied for, badges for attending events and placements - friends confirm they attended?</p>
				  		</div>
							<aside class="span3 offset1">
								<div class="well">
									<h4>Your saved jobs</h4>
									<p><i class="icon-star"></i> <a href="#">Designer at Mr Porter</a></p>
									<p><i class="icon-star"></i> <a href="#">Office assistant at Debenhams</a></p>
								</div>	
							</aside>	
				
						</div>
					</div><!-- .tab-pane -->
						
				  <div class="tab-pane" id="projects">...</div>
					<div class="tab-pane" id="network">
						<div id="network-feed"></div>
					</div>
				  <div class="tab-pane" id="settings">
						<div class="span6">
						<h3>Settings</h3>
				  	<h5>Connect to LinkedIn</h5>
						
						<p>We can use LinkedIn as follows:</p>
						<ul>
							<li>A new member can log in with LinkedIn i.e. they use their login credentials from LinkedIn and do not need to create a new password. In this case they would still have a record in our database including (as a minimum) an email address, and perhaps their 'class of' year at LCF.</li>
							<li>When completing a profile, a user can use her LinkedIn profile API data as suggested content for her Platform X account. She would have the option to save or amend this data. The user's member ID is stored, so potentially we can have a 'refresh your profile' button that updates Platform X info from the LinkedIn API. <a href="https://developer.linkedin.com/forum/using-api-profile-data-suggestions-3rd-party-profile-data">Further reading</a>.</li>
						</ul>		
							
						<h5>Connect to Facebook</h5>	
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
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/postit_script.js"></script>
		<script src="js/dragdrop.js"></script>
  

</body></html>