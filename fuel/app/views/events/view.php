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


<div class="container">

      <div class="container">
      	<div class="row">
        	<div class="col-md-12 text-center">
				<!-- <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/reggae.jpg"></a> -->
				<img class="img-responsive img-rounded" src="http://placehold.it/1200x400">
			</div>
		</div>
     </div>
     <div class="row">
	     <div class="col-lg-8 col-sm-8">
            <h2><?php echo $event->name; ?></h2>
            <p class="lead"><?php echo $event->desc; ?><a target="_blank" href="http://join.deathtothestockphoto.com/">Have them click here to go to the event detail page</a>.</p>
			<div class="col-md-offset-2">
				<a href="#about" class="btn btn-default btn-lg">&nbsp;&nbsp;I'm Going&nbsp;&nbsp;</a>
				<a href="#about" class="btn btn-default btn-lg" style="margin-left:40px;">&nbsp;&nbsp;I might go&nbsp;&nbsp;</a>
			</div>
          </div>
          <div class="col-lg-4 col-sm-4">
          	<h2>Where</h2>
		  	<address>
		  		<strong>SOB's</strong>
		  	<br/>Street
		  	<br/>Ny, NY 10001
		  	<br/>
		  	<br/><strong>Doors:  7pm</strong>
		  	</address>
		  	<address><abbr title="Phone">P: </abbr> (123) 456-7890
		  	<br/><abbr title="Email">E: </abbr> <a href="mailto:grantelgin@gmail.com">grant@grantelgin.com</a>
		  	</address> 
          </div>
        </div>
     </div>
      
      <hr>
      
      <div class="row">
        <div class="col-lg-12">
           <h3>Producers</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>


      </div><!-- /.row -->
      
      <div class="row text-center" style="margin-top:40px;">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
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
            <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>
      
    </div><!-- /.container -->