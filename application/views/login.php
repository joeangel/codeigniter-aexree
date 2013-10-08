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
	body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
	}

	.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
		border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
	margin-bottom: 10px;
	}
	.form-signin input[type="text"],
	.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
	}
	</style>
</head>
<body>

<div class="container">
	<form class="form-signin" action="#" method="post">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input type="text" class="input-block-level" placeholder="Email address">
		<input type="password" class="input-block-level" placeholder="Password">
		<label class="checkbox">
			<input type="checkbox" value="remember-me">
			Remember me
		</label>
		<button class="btn btn-large btn-primary" type="submit">Sign in</button>
	</form>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
