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
				<div id="fanBtnContainer" class="col-md-4" style="margin-top:-3px;">
					<h4 id="h4_FanButtons" style="display:none;">Are you going?</h4>
					<div id="DIV_FanButtons" style="">
						<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
						<a href="#about" class="btn btn-default btn-lg" style="margin-left:40px;">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
					</div>
				</div>
			</div>
			</div>
			
		</header>
<div class="container hmpTop">

      <div class="container">
      	<div class="row">
        	<div class="col-lg-11 col-lg-offset-1 col-md-12 text-center">
				<!-- <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/reggae.jpg"></a> -->
				<img class="img-responsive img-rounded" src="http://placehold.it/900x300">
			</div>
		</div>
     </div>
     <div class="row">
	     <div class="col-lg-8 col-sm-8">
            <h2>&nbsp;</h2>
            <p><?php echo $event->desc; ?></p>
			<div class="col-md-offset-2" style="display:none;">
				<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
				<a href="#about" class="btn btn-default btn-lg" style="margin-left:40px;">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
			</div>
          </div>
          <div class="col-lg-2 col-sm-3 col-lg-offset-2 col-md-offset-1 col-sm-offset-1" style="margin-top:10px;">
          	<a href="https://maps.google.com/maps?q=SOB's,+Varick+Street,+New+York,+NY&hl=en&sll=42.37839,-71.11291&sspn=0.086356,0.161705&oq=sobs+new&t=m&z=16&iwloc=A" target="_blank"><i class="fa fa-map-marker" style="float:left; font-size:2em;padding-top:5px;"></i><h4 style="float:left;margin-left:5px;">Where</h4><div style="clear:both;"></div>
          	</a>
		  	<address>
		  		<strong>SOB's</strong>
		  	<br/>204 Varick St.
		  	<br/>NY, NY 10014
		  	<br/>
		  	<br/><strong>Doors:  7pm</strong>
		  	</address>
		  	<address><abbr title="Phone">P: </abbr> (123) 456-7890
		  	<br/><abbr title="Email">E: </abbr> <a class="hot" href="mailto:grantelgin@gmail.com">Email us</a>
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