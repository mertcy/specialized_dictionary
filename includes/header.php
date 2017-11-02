<style>
	body{overflow-x: hidden;}
</style>

<?php
	include('includes/arrays.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>

		<link rel="icon" href="img/logo.png" type="image/png"/>
		<title>	
			<?php echo TITLE; ?>
		</title>
	</head>
	<body id="home-page">
		<div class="wrapper">
			<div id = "banner">
                <a href="/" title="return to home">
                    <img src="img/bannerr.png" alt="specialized_dictionary">
                </a>
			</div><!-- banner -->

            <div id="nav">
               	<?php include('includes/nav.php'); ?>
			</div><!-- nav -->

            <div class="content">