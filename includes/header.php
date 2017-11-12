<style>
	body{overflow-x: hidden;}
</style>

<?php
	session_start();
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
				<div id="explanation">
					<small>
            			<p>the place where you express yourself with anonimity..</p>
					</small>
    			</div>
			</div><!-- banner -->

            <div id="nav">
				<?php
					include('includes/nav.php');
					if(!isset($_SESSION['userid'])) {
						include('sessionNoUser.php');
					} else if(isset($_SESSION['userid'])){
						include('sessionUser.php');
					}
					
				?>
			</div><!-- nav -->
			<form>
            	<input type="text" name="search" placeholder="search..">
        	</form>
            
			<div class="container2">