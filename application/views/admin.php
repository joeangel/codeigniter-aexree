<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Bootstrap">
	<meta name="description" content="Bootstrap">
	<meta name=”robots” content=”noodp,noydir”>
	<link rel="shortcut icon" href="<?=base_url(); ?>favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/aexree.css" media="screen">
	<style type="text/css">
	header{
	height:100px;
	}
	.bs-docs-sidenav.affix {
	top: 10px;
	}
	@media (min-width: 1200px) {
	.bs-docs-sidenav {
	width: 258px;
	}
	.bs-docs-sidenav {
	width: 228px;
	margin: 10px 0 0;
	padding: 0;
	background-color: #fff;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0 1px 4px rgba(0,0,0,.065);
	-moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
	box-shadow: 0 1px 4px rgba(0,0,0,.065);
	}
	.affix {
	position: fixed;
	}
	}



	</style>
</head>
<body>

<header> 
<div class="well"> 
	<h2>Header</h2>
</div>
</header>

<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Roux Academy Conference</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
		<li class="active"><a href="#">Home</a> </li>
      	<li><a href="#">The Artists</a></li>
        <li><a href="#">The Art</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Venue</a></li>
        <li><a href="#">Hotels</a></li>
		</ul>
      </div>
    </div>
  </div>
</div>

<script>
//$('#navbar').affix();
</script>


<div class="container">
<div class="row">

	<div class="span3 bs-docs-sidebar">
		<ul class="nav nav-list bs-docs-sidenav affix-top" data-spy="affix" data-offset-top="100">
			<li class="header"><h3>Sidebar</h3></li>
			<li class="active"><a href="#global"><i class="icon-chevron-right"></i> Global styles</a></li>
			<li><a href="#gridSystem"><i class="icon-chevron-right"></i> Grid system</a></li>
			<li><a href="#fluidGridSystem"><i class="icon-chevron-right"></i> Fluid grid system</a></li>
			<li><a href="#layouts"><i class="icon-chevron-right"></i> Layouts</a></li>
			<li><a href="#responsive"><i class="icon-chevron-right"></i> Responsive design</a></li>
		</ul>
	</div>
	<div class="span9">
		<h1>Main</h1>
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?

		<br>

		Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?

		<br>

		Qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?

		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
		<br>
		    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
		dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
		eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
    
	</div>
</div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
