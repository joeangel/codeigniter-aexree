<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Bootstrap">
	<meta name="description" content="Bootstrap">
	<meta name=”robots” content=”noodp,noydir”>
	<link rel="shortcut icon" href="<?=base_url(); ?>favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/aexree.css" media="screen">
	<!--Semantic Elements in HTML5-->
	<!--[if lt IE 9]>
	<script src="https://raw.github.com/aFarkas/html5shiv/master/dist/html5shiv-printshiv.js"></script>
	<![endif]-->
</head>
<body>
<div id="container">
	<h1>Welcome to Bootstrap!</h1>

	<div id="body">

		<p>Aexree</p>
		<ul>
			<li><a href="http://www.ericfo.com.tw/SMAUSW/">ericfo</a></li>
			<li><a href="http://www.ericfo.com.tw/SMAUSW/Building/Show2.aspx?Building_SID=B000000088">aexree/長安科博社區官方網站</a></li>
			<li><a href="<?=base_url(); ?>test/community">ci/長安科博社區官方網站</a></li>
			<li><a href="http://www.responsinator.com/?url=http://localhost/ci/test/community">mobile/長安科博社區官方網站</a></li>
		</ul>

		<p>w3schools webpage link</p>
		<ul>
			<li><a href="http://www.w3schools.com/html/default.asp">html</a></li>
			<li><a href="http://www.w3schools.com/tags/default.asp">html tag list</a></li>
			<li><a href="http://www.w3schools.com/html/html5_intro.asp">html5</a></li>
		</ul>

		<p>Bootstrap</p>
		<ul>
			<li><a href="http://kkbruce.tw/">Bootstrap Chinese</a></li>
			<li>Sider bar</li>
			<ul>
				<li><a href="http://stackoverflow.com/questions/13604285/collapsable-sidebar-with-fluid-twitter-bootstrap">Collapsable sidebar with fluid twitter bootstrap</a></li>
				<li><a href="http://tech.xtremelabs.com/html5-facebook-style-sliding-menu-using-twitter-bootstrap-collapse/">HTML5 Facebook Style Sliding Menu Using Twitter Bootstrap Collapse</a></li>
				<li><a href="http://bootply.com/tagged/collapse">Bootstrap Collapse examples</a></li>
				<li><a href="http://bootply.com/tagged/sidebar">Bootstrap Sidebar examples</a></li>
				<li><a href="http://stackoverflow.com/questions/14152378/how-to-customize-bootstrap-sidebar-sidenav">How to customize bootstrap sidebar/sidenav?</a></li>
				<li><a href="http://www.w3resource.com/twitter-bootstrap/nav-tabs-and-pills-tutorial.php">Twitter Bootstrap nav, tabs and pills tutorial</a></li>
				<li><a href="http://jsfiddle.net/luismruiz/YRVev/">left menu example</a></li>
			</ul>
			<li>Responsive Design</li>
			<ul>
				<li><a href="http://webdesignerwall.com/tutorials/responsive-design-in-3-steps">Responsive Design in 3 Steps</a></li>
			</ul>
			<li>Assets TookKit</li>
			<ul>
				<li><a href="http://c9s.blogspot.tw/2013/03/php-assettoolkit.html">cs9 PHP-AssertToolKet</a></li>
				<li><a href="https://github.com/c9s/php-AssetToolkit">github</a></li>
			</ul>
		</ul>

		<p>Html5 Semantic</p>
		<figure>
		<img src="<?=base_url(); ?>assets/img/glyphicons-halflings-white.png" alt="The Pulpit Rock" width="304" height="228">
		<figcaption>Fig.1 - The Pulpit Rock, Norway.</figcaption>
		</figure>

		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

	</div>

	<p class="debug-footer">Page rendered in <strong>{elapsed_time}</strong> seconds, used memory {memory_usage}</p>
</div>

<div id="footer" class="footer">
	<div id="footerAbout">
		<a href="" onclick="displayError();return false" style="word-spacing:normal;">REPORT ERROR</a> |
		<a href="/default.asp" target="_top">HOME</a> |
		<a href="#top" target="_top">TOP</a> |
		<a href="" target="_blank" onclick="printPage();return false">PRINT</a> |
		<a href="/forum/default.asp" target="_blank">FORUM</a> |
		<a href="/about/default.asp" target="_top">ABOUT</a> |
		<a href="/about/about_advert.asp" target="_top" style="word-spacing:normal;">ADVERTISE WITH US</a>
	</div>

	<div id="footerText">
		Aexree optimized for community.<br>
		While using this site, you agree to have read and accepted our
		<a href="/about/about_copyright.asp">terms of use</a> and
		<a href="/about/about_privacy.asp">privacy policy</a>.<br>
		<a href="/about/about_copyright.asp">Copyright 1999-2013</a> by Refsnes Data. All Rights Reserved.<br><br>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>
function printPage()
{
content=document.getElementById("container").innerHTML;
head=document.getElementsByTagName("head")[0].innerHTML;
var myWindow=window.open('','','');
myWindow.document.write("<html><head>"+head+"<style>body{background-color:white}</style></head><body>"+content+"<p><a href='/about/about_copyright.asp'>Copyright 2013-2014</a> by Aexree. All Rights Reserved.</p></body></html>");
myWindow.document.close();
myWindow.print();
}
</script>
</body>
</html>
