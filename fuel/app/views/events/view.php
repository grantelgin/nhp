<!--
<h2>Viewing <span class='muted'>#<?php echo $event->id; ?></span></h2>

<p>
	<strong>Event id:</strong>
	<?php echo $event->event_id; ?></p>
<p>
	<strong>Name:</strong>
	<?php echo $event->name; ?></p>
<p>
	<strong>Desc:</strong>
	<?php echo $event->desc; ?></p>
<p>
	<strong>Location id:</strong>
	<?php echo $event->location_id; ?></p>
<p>
	<strong>Eventbrite link:</strong>
	<?php echo $event->eventbrite_link; ?></p>
<p>
	<strong>Graphic src:</strong>
	<?php echo $event->graphic_src; ?></p>

<?php echo Html::anchor('events/edit/'.$event->id, 'Edit'); ?> |
<?php echo Html::anchor('events', 'Back'); ?>
-->
<header class="pageBar secondary">
			<div class="container" style="padding-top:5px;">
			<div class="row">
				<div class="col-md-8">
				<span style="font-size:30px;"><?php echo $event->name; ?></span>
				</div>
				<!--
<div id="fanBtnContainer" class="col-md-4" style="margin-top:-3px;">
					<h4 id="h4_FanButtons" style="display:none;">Are you going?</h4>
					<div id="DIV_FanButtons" style="">
						<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
						<a href="#about" class="btn btn-default btn-lg" style="margin-left:40px;">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
					</div>
				</div>
-->
			</div>
			</div>
			
		</header>
<div class="container hmpTop">

      <div class="container">
      	<div class="row">
        	<div class="col-lg-8 col-md-8 text-center">
				<!-- <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/reggae.jpg"></a> -->
				<img class="img-responsive img-rounded" src="http://placehold.it/900x300">
			</div>
			<div class="col-lg-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
				<strong>Want to compete?</strong>
				<br/>Sign up here
				<br/>Read rules first
				<div style="margin-top:30px;"><strong>Want to see the show?</strong>
				<br/>Sign up for updates
				</div>
			</div>
		</div>
     </div>
     <div class="row">
	     <div class="col-lg-8 col-sm-8"><br/><br/>
            <strong><?php echo $event->name; ?></strong><br/>
            <p><?php echo $event->desc; ?></p>
			<!--
<div class="col-md-offset-2" style="display:none;">
				<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
				<a href="#about" class="btn btn-default btn-lg" style="margin-left:40px;">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
			</div>
-->
          </div>
          <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="margin-top:10px;">
          	<a href="http://maps.apple.com/?q=472+massachusetts+ave+cambridge+ma+02139" target="_blank"><i class="fa fa-map-marker" style="float:left; font-size:2em;padding-top:5px;"></i><h4 style="float:left;margin-left:5px;">Where</h4><div style="clear:both;"></div>
          	</a>
		  	<address>
		  		<strong>Middle East Upstairs</strong>
		  	<br/>472 Massachusetts Ave
		  	<br/>Cambridge, MA 02139
		  	<br/>
		  	<br/><strong>Doors:  6pm</strong>
		  	</address>
		  	<address><abbr title="Phone">P: </abbr> (662) 588 - 4537
		  	<br/><abbr title="Email">E: </abbr> <a href="mailto:mike@hotmusicpro.com">mike@hotmusicpro.com</a>
		  	</address> 
          </div>
        </div>
     </div>
      
      <hr>
      
      <!-- Callout -->
    <div class="callout" style="height:100px;margin-bottom:20px;">
      <div class="vert-text">
        <h1>Lineup</h1>
      </div>
    </div>
    <!-- /Callout -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>


      </div><!-- /.row -->
      
      <div class="row text-center" style="margin-top:40px;">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x800" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>


      </div><!-- /.row -->
      
      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; HotMusicPro 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>
      <?php echo Asset::js(array(
		'jquery.js',
		'bootstrap.js',
		'nhp.js'
	)); ?>
      
    </div><!-- /.container -->