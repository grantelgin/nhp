<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Next Hot Producer</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('business-casual.css'); ?>
	
	</head>
<body>
		<div class="brand">Next Hot Producer</div>
    <div class="address-bar">America's next hot music producer</div>
    
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Next Hot Producer</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">The Show</a></li>
            <li><a href="blog.html">What's hot</a></li>
            <li><a href="contact.html">Compete</a></li>
            <li><a href="contact.html">Music</a></li>
            <li><a href="contact.html">Calendar</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
		
		
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
