<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hot Music Pro</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('hmp.css'); ?>
	<?php echo Asset::css('font-awesome/css/font-awesome.min.css'); ?>
	
	</head>
<body>
		
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container" style="color:#000;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href=""><img src="/assets/img/HMPBlack.png" alt="HMPBlack" height="50"></a> -->
        </div> 

        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
	          <li><a href=""><i class="fa fa-users" style="color:#fff;"></i>Attend</a></li>
	          <li><a href="">Compete</a></li>
	          <li><a href="">Support</a></li>
          </ul>
          <a class="navbar-brand" href=""><img src="/assets/img/HMPBlack.png" alt="HMPBlack" height="40"></a>
          <ul class="nav navbar-nav hmp-nav">
            <li><?php echo Html::anchor('../', 'Home'); ?></li>
            <li><?php echo Html::anchor('events/view/1', 'The Show'); ?></li>
            <li><?php echo Html::anchor('events/', 'What\'s Hot'); ?></li>
            <li><?php echo Html::anchor('events/', 'Compete'); ?></li>
            <li><?php echo Html::anchor('events/', 'Music'); ?></li>
            <li><?php echo Html::anchor('events/', 'Calendar'); ?></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </nav>
		</header>
		

		<!-- Side Menu -->
    <a id="menu-toggle" class="btn btn-primary btn-lg toggle"><i class="fa fa-reorder"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="#">Next Hot Producer</a></li>
        <li><a href="index.html">Home</a></li>
            <li><a href="about.html">The Show</a></li>
            <li><a href="blog.html">What's hot</a></li>
            <li><a href="contact.html">Compete</a></li>
            <li><a href="contact.html">Music</a></li>
            <li><a href="contact.html">Calendar</a></li>
      </ul>
    </div>
    <!-- /Side Menu --> 

	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<!--
<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
-->
		</footer>
	</div>
	<?php echo Asset::js(array(
		'jquery.js',
		'bootstrap.js',
		'nhp.js'
	)); ?>

</body>
</html>
