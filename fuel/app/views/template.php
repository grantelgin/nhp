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
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../"><img src="/assets/img/HMPBlack.png" alt="HMPBlack" class="hmpLogo"></a>
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
          </div>
    <!-- /Side Menu --> 

	<div class="container">
		<div class="col-md-12">
			<h1><!-- <?php echo $title; ?> -->&nbsp;</h1>
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
			<div class="alert alert-danger">
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
		
		 <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="facebook.com/hotmusicpro"><i class="fa fa-facebook fa-3x"></i></a></li>
              <li><a href="https://twitter.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="@hotmusicpro"><i class="fa fa-twitter fa-3x" ></i></a></li>
              <li><a href="http://instagram.com/hotmusicpro" target="_blank" class="lnkSocial" data-placement="bottom" title="instagram.com/hotmusicpro"><i class="fa fa-instagram fa-3x" ></i></a></li>
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
    <!-- /Footer -->	</div>
	<?php echo Asset::js(array(
		'jquery.js',
		'bootstrap.js',
		'nhp.js'
	)); ?>

</body>
</html>
