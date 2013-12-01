<!DOCTYPE html>
<html lang="en">
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
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><img src="/assets/img/HMPBlack.png" alt="HMPBlack" class="hmpLogo"></a>
        </div> 

        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav hmp-nav">
            <li><?php echo Html::anchor('../', 'Home'); ?></li>
            <li><?php echo Html::anchor('events/view/1', 'The Next Show'); ?></li>
            <li><?php echo Html::anchor('../#whatshot', 'What\'s Hot'); ?></li>
            <li><?php echo Html::anchor('eventProducers/', 'Compete'); ?></li>
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
        <li class="sidebar-brand" ><a href="#">Next Hot Producer</a></li>
        <li><a href="index.html">Home</a></li>
            <li><a href="about.html">The Next Show</a></li>
            <li><a href="blog.html">What's hot</a></li>
            <li><a href="contact.html">Compete</a></li>
      </ul>
    </div>
    <!-- /Side Menu --> 
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text" style="padding-top:50px;">

<div class="container">
<div class="row">
        <div class="col-md-12 text-center wrapper"><a href="/events/view/1">
        <!-- <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/reggae.jpg"></a>  -->
        <img class="img-responsive img-rounded" src="../assets/img/reggaeinnatrap.jpg"></a>
        <a href="http://www.mideastclub.com" target="_blank"><img class="melogo" src="../assets/img/MElogo.gif" height="80"></a>
        <a href="https://www.facebook.com/higglewleaders" target="_blank"><img class="higgLogo" src="../assets/img/higgLew1.png" height="80">
	        <p class="higgText lead" style="color:#fff;">Higg-Lew Leaders<br/><small>Empowered by vision</small></p>
        </a>
        </div>
        </div>
        </div>

<div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <!--
<h4>Reggae inna trap house</h4>
            <h2>Sponsors</h2>

            <hr> -->
          </div>
        </div>
        <!--
<div class="row">
	        <div class="col-lg-4">
		        <img src="../assets/img/higgLew.png" alt="higgLew" width="500">
	        </div>
	        <div class="col-lg-offset-4 col-lg-4" style="padding-top:50px;">
	        <i class="fa fa-video-camera" style="font-size:7em;"></i>
	        <h2>Darren Cole Productions</h2>
	        </div>
        </div>
-->
</div>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
    
    <!-- Intro -->
    <!-- <div id="about" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Reggae inna Trap House</h2>
            <p class="lead">Lights,Camera, Action You’re ON!!!!!!! America’s Next Hot Music Producer will be airing live in New York City on January 16th @ the legendary SOB’s. Come check out 12 of NYC’s hottest producers compete to see who will be crowned “Americas Next Hot Music Producer” by sampling and remixing music from your favorite reggae hits...  <a target="_blank" href="http://join.deathtothestockphoto.com/">Have them click here to go to the event detail page</a>.</p>
			<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
			<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /Intro -->
    
    <!-- Services -->
    <div id="whatshot" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>What's Hot</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <div class="service-item"><a href="events/view/1" style="color:#fff;">
              <!-- <i class="service-icon"><span>6</span> <span>MAR</span></i> -->
              <i class="service-icon fa fa-calendar"></i>
              <h4>The Next Show</h4>
              <p>Reggae inna trap house</p></a>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="service-item"><a href="../#hotProducers" style="color:#fff;">
              <i class="service-icon glyphicon glyphicon-fire"></i>
              <h4>Producer on Fire</h4>
              <p>Link to producer profiles</p></a>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="service-item"><a href="../#topFive" style="color:#fff;">
              <i class="service-icon fa fa-volume-up"></i>
              <h4>The Beat Tapes</h4>
              <p>Instrumental Compilation. Submit your own beats to share</p></a>
            </div>
          </div>          <div class="col-md-3 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-calendar"></i>
              <h4>Calendar of events coming up</h4>
              <p>Link to an awesome calendar</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->
    
    <!-- Callout -->
    <div id="topFive" class="callout">
      <div class="vert-text">
        <h1>Top 5 beats of the week</h1>
      </div>
    </div>
    <!-- /Callout -->

    <!-- Portfolio -->
    <div id="hotProducers" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Producer on Fire</h2>
            <hr>
          </div>
        </div>
        <div class="row">

        <div class="col-md-4 portfolio-item">
          <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/chase-n-cashe.jpg"></a>
          <h3><a class="hot" href="#project-link">Chase n Cashe</a></h3>
          <p>Some music producers remain the unknown magicians on the sound board. Others like “Surf Club’s” Chase N Cashe aspire to be more than just...</p>
        </div>

        <div class="col-md-4 portfolio-item">
          <a href="#project-link" style="overflow:hidden;"><img class="img-responsive img-rounded" src="/assets/img/harry-fraud-456.jpg"></a>
          <h3><a class="hot" href="#project-link">Harry Fraud</a></h3>
          <p>Ennui bespoke artisan pour-over fixie hella.  Direct trade  sriracha 3 wolf moon, readymade put a bird on it </p>
        </div>

        <div class="col-md-4 portfolio-item">
          <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/sha.jpeg"></a>
          <h3><a class="hot" href="#project-link">Lady Sha</a></h3>
          <p>Cillum distillery pickled selfies, readymade Portland mixtape consectetur kogi. YOLO</p>
        </div>

      </div>

    </div>
    <!-- /Portfolio -->

    <!-- Call to Action -->
    <div class="call-to-action" style="background-color:#c23520;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h3>Sign up for updates</h3>
            <div class="input-group input-group-lg">
  <span class="input-group-addon" style="color:#000;">@</span>
  <input type="text" class="form-control" placeholder="Email">
  <!--
<span class="input-group-btn">
        <button class="btn btn-default" type="button">Sign me up</button>
      </span>
-->
</div>

          </div>
        </div>
      </div>
    </div>
    <!-- /Call to Action -->

    <!-- Map -->
    <!-- <div id="contact" class="map">
		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=897+Main+St,+Cambridge,+MA&amp;aq=0&amp;oq=897+main+st+&amp;sll=42.391959,-71.128149&amp;sspn=0.043169,0.058107&amp;ie=UTF8&amp;hq=&amp;hnear=897+Main+St,+Cambridge,+Massachusetts+02139&amp;t=m&amp;z=14&amp;ll=42.363437,-71.099534&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=897+Main+St,+Cambridge,+MA&amp;aq=0&amp;oq=897+main+st+&amp;sll=42.391959,-71.128149&amp;sspn=0.043169,0.058107&amp;ie=UTF8&amp;hq=&amp;hnear=897+Main+St,+Cambridge,+Massachusetts+02139&amp;t=m&amp;z=14&amp;ll=42.363437,-71.099534" style="color:#0000FF;text-align:left">View Larger Map</a></small>
    </div> -->
    <!-- /Map -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="facebook"><i class="fa fa-facebook fa-3x"></i></a></li>
              <li><a href="https://twitter.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="twitter"><i class="fa fa-twitter fa-3x" ></i></a></li>
              <li><a href="http://instagram.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="instagram"><i class="fa fa-instagram fa-3x" ></i></a></li>
            </ul>
            <!--
<div class="top-scroll">
              <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
            </div>
-->
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <p>Copyright &copy; HotMusicPro 2013 </p>
          </div>
            <div class="col-lg-offset-5 col-lg-4">
            <?php echo Html::anchor('../', 'Home'); ?> &middot; <?php echo Html::anchor('events/view/1', 'The Next Show'); ?> &middot; <?php echo Html::anchor('../#whatshot', 'What\'s Hot'); ?> &middot; <?php echo Html::anchor('eventProducers/', 'Compete'); ?>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    
    		
<!--
		<hr/>
		<footer>

<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>

		</footer>
-->
	</div>
	<?php echo Asset::js(array(
		'jquery.js',
		'bootstrap.js',
		'nhp.js'
	)); ?>
	
	<!-- Custom JavaScript for the Side Menu and Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    </body>
</html>
