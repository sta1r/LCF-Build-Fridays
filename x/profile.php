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
					<div class="span6" id="calloutBox">
					</div>
				</div>
			</header>
		</div>	
		<div class="row-fluid">	
			<section class="span9">
   
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
							<div class="span6">
								<h3>Welcome!</h3>
								<img src="img/editd-graph.png">
								<ul>
									<li>Your daily visitors since 1 July 2012</li>
								</ul>	
							</div>
							<div class="span5 offset1">
								<h4>Vital signs</h4>
								<p><i class="icon-eye-open"></i> Your profile has been viewed <strong>17</strong> times</p>
								<p><i class="icon-thumbs-up"></i> Your work has been liked <strong>6</strong> times</p>
								<p><i class="icon-envelope"></i> Your have received <strong>2</strong> enquiries</p>
							</div>
						</div>
					</div>
				  <div class="tab-pane" id="profile">
				  	<div class="row-fluid">
							<div class="span10">
								<div class="relative">
								<h3>Your profile</h3>
								<p>Francesca Smith's work explores the capabilities and juxtaposition of combining hard materials with soft textiles within a fashion jewellery context.</p>
								<p>She explores a variety of materials from woods to fabrics, to metals to plastics. Exploring the possibilities of applying alternative materials to a fashion jewellery context.</p>
								<p>Francesca Smith's BA graduate collection:</p>
								<blockquote>"I have always been fascinated by modern social attitudes towards remembering the dead and how people deal with the loss of a loved one. By looking at the extravagant rituals and customs of the Victorian era and the funerary practices of its people, my intent was to produce a collection, which confronts people with the idea of positive remembrance. By exploring the designs of Victorian jewellery and cemetery art, I sort to recreate classic designs using modern technologies. This contrast reflects the concept of current attitudes towards death compared to that of the Victorians. Using 3D design software and the process of rapid prototyping, I created nylon components embodying elements of Victorian mourning design. I chose to combine these elements with human hair and fabric to create a material juxtaposition, which reflects my design style of using hard materials with soft textiles."</blockquote>

								<p>Modeled images:</p>
								<ul>
									<li>Photographed by Vicki King</li>
									<li>Hair and Make-up by Hayley Fell</li>
									<li>Modeled by Caroline Druitt</li>
								</ul>	
								<div class="edit-control"><a class="btn btn-primary">Edit</a></div>
								</div>
								<hr>
								<div class="relative">
								<h4>Work and placement experience</h4>
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
								<div class="edit-control"><a class="btn btn-primary">Edit</a></div>
								</div>
								<hr>
								<div class="relative">
								<h4>Events attended</h4>	
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Title</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Hilary Alexander - Fashion, travel and the press</td>
											<td>September 9 2012</td>
										</tr>
										<tr>
											<td>Gok Wan presents 'You Look Good Naked'</td>
											<td>April 14 2012</td>
										</tr>
									</tbody>
								</table> 
								<div class="edit-control"><a class="btn btn-primary">Edit</a></div>
								</div>
							</div>
						</div><!-- .row-fluid -->		
						
				  </div><!-- .tab-pane -->
				  <div class="tab-pane" id="media">
				  	<h3>Your media</h3>
				 		<div id="showtime-json" data-limit="50" data-url="http://showtime.arts.ac.uk/francescasmith.json">
				 			<div class="row-fluid">
								<div class="span11">
									<div class="loader"></div>
									<ul class="thumb-list no-bullet"></ul>
								</div>
							</div>		
				 		</div>
				  </div>
				  <div class="tab-pane" id="jobs">
						<h3>Latest jobs</h3>
				  		<div id="jobs-list"></div>
						<h3>Placements offered</h3>
						<div id="placements-list">
							<table class="table table-striped"><thead><tr><th>Title</th><th>Location</th><th>Payment</th><th>Duration</th></tr></thead><tbody><tr><td>Abercrombie & Fitch (design)</td><td>Greater London</td><td>Unpaid</td><td>1 month</td><td><button class="btn btn-info">View detail</button></td><td><button class="btn">Save placement</button></td><td><button class="btn btn-primary">Apply</button></td></tr><tr><td>Brand Assistant</td><td>Greater London</td><td>Store vouchers</td><td>2 weeks</td><td><button class="btn btn-info">View detail</button></td><td><button class="btn">Save placement</button></td><td><button class="btn btn-primary">Apply</button></td></tr><tr><td>Fashion Design Assistant </td><td>Others</td><td>Negotiable</td><td>6 weeks</td><td><button class="btn btn-info">View detail</button></td><td><button class="btn">Save placement</button></td><td><button class="btn btn-primary">Apply</button></td></tr><tr><td>Print Design Assistant </td><td>Others</td><td>Negotiable</td><td>1 month</td><td><button class="btn btn-info">View detail</button></td><td><button class="btn">Save placement</button></td><td><button class="btn btn-primary">Apply</button></td></tr><tr><td>Debenhams (retail)</td><td>Greater London</td><td>Expenses paid</td><td>1 month</td><td><button class="btn btn-info">View detail</button></td><td><button class="btn">Save placement</button></td><td><button class="btn btn-primary">Apply</button></td></tr></tbody></table> 
						</div>
						<p>Add jobs applied for, jobs saved, placements, badges for attending events and placements - friends confirm they attended?</p>
				  </div>
				  <div class="tab-pane" id="projects">...</div>
					<div class="tab-pane" id="network">
						<div id="network-feed"></div>
					</div>
				  <div class="tab-pane" id="settings">...</div>
				</div><!-- .tab-content -->

			</section>
			
			<aside class="span3">
				<div class="well">
					<h4>Resources</h4>
					<p>This panel can house hints and tips relevant to any section of the account profile - e.g.:</p>
					<ul>
						<li>Advice on completing a personal statement</li>
						<li>Prompts to fill out all required information</li>
						<li>Tips on properly crediting photographers</li>
					</ul>	
				</div>	
			</aside>
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