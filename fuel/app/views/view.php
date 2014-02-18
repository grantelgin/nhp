
<!--
<header class="pageBar secondary">
		<div class="container" style="padding-top:5px;">
			<div class="row">
				<div class="col-md-8">
					<span style="font-size:30px;"><?php echo $event->name; ?></span>
				</div>
			</div>
		</div>			
</header>
-->

<div class="container hmpTop">

      <div class="container">
      	<div class="row">
        	<div class="col-lg-8 col-md-8 text-center">
				<!-- <a href="#project-link"><img class="img-responsive img-rounded" src="/assets/img/reggae.jpg"></a> -->
				<img class="img-responsive img-rounded" src="../../assets/img/reggaeInnaTrap.jpg">
			</div>
			<div class="col-lg-3 col-md-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
				<strong>Want to compete?</strong>
				<br/><?php echo Html::anchor('eventproducers/', 'Sign up here'); ?>
				<br/>
									<div style="margin-top:30px;">
						<strong>Want to see the show?</strong>
						<br/>Sign up for updates
						<?php echo Form::open(array("class"=>"form-inline")); ?>
		            <div class="form-group" style="margin-top:15px; margin-bottom:15px;">
					  <?php echo Form::input('fanemail', Input::post('fanemail', isset($fan) ? $fan->fanemail : ''), array('class' => 'form-control', 'placeholder'=>'email')); ?>
					  <!-- <input type="text" class="form-control" placeholder="Email"> -->
					</div>
					<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-warning navbar-inverse')); ?>
					<!-- <button type="button" class="btn btn-primary navbar-inverse">Submit</button> -->
	            <?php echo Form::close(); ?>
						
						<!--
<form class="form-inline" role="form">

						<div class="form-group" >
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<button type="button" class="btn btn-warning navbar-inverse">Submit</button>
						</form>
-->
					</div>
				
			</div>
		</div>
     </div>
     <div class="row">
	     <div class="col-lg-8 col-sm-8"><br/><br/>
            <strong><?php echo $event->name; ?></strong><br/>
            <p><?php echo $event->desc; ?></p>
	      </div>
          <div class="col-lg-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1" style="margin-top:10px;">
          	<a href="http://maps.apple.com/?q=472+massachusetts+ave+cambridge+ma+02139" target="_blank"><i class="fa fa-map-marker" style="float:left; font-size:2em;padding-top:5px;"></i><h4 style="float:left;margin-left:5px;">Where</h4><div style="clear:both;"></div>
          	</a>
		  	<address>
		  		<strong>Middle East Upstairs</strong>
		  	<br/>472 Massachusetts Ave
		  	<br/>Cambridge, MA 02139
		  	<br/>
		  	<br/><strong>Show:  8pm</strong>
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
    <h2>Stay tuned...</h2>
    <h3>Competitors will be announced here</h3>
    </div>
    <div class="row text-center" style="margin-top:40px;">
    			
				<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 text-center">
						<strong>Want to see the show?</strong>
						<br/>Sign up for updates
						<?php echo Form::open(array("class"=>"form-inline")); ?>
		            <div class="form-group" style="margin-top:15px; margin-bottom:15px;">
					  <?php echo Form::input('fanemail', Input::post('fanemail', isset($fan) ? $fan->fanemail : ''), array('class' => 'form-control', 'placeholder'=>'email')); ?>
					  <!-- <input type="text" class="form-control" placeholder="Email"> -->
		            </div>
					<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-warning navbar-inverse')); ?>
					<!-- <button type="button" class="btn btn-primary navbar-inverse">Submit</button> -->
	            <?php echo Form::close(); ?>
	</div>
	</div>
      <!--
<div class="row text-center">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/chase-n-cashe.jpg" style="width:100%; height:100%;" alt=""> -->
            <!--
<img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->

       <!--
 <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/producer1.jpg" style="width:100%; height:100%;" alt=""> -->
            <!--
<img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->

        <!--
<div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/sha.jpeg" style="width:100%; height:100%;" alt=""> -->
           <!--
 <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->
<!--

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/producer2.jpg" style="width:100%; height:100%;" alt=""> -->
           <!--
 <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->


     <!--  </div> --><!-- /.row -->
      
      <!--
<div class="row text-center" style="margin-top:40px;">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/producer3.jpg" alt=""> -->
            <!--
<img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>

-->
       <!--
 <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/producer4.jpg" alt=""> -->
         <!--
   <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->

      <!--
  <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
-->
            <!-- <img src="/assets/img/harry-fraud-456.jpg" alt=""> -->
          <!--
  <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->

        <!--
<div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
              <h3>Producer</h3>   
           </div>
          </div>
        </div>
-->


     <!--  </div> --><!-- /.row -->
      
      <!--
<hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; HotMusicPro 2013 &middot; <a href="https://www.facebook.com/hotmusicpro" target="_blank">Facebook</a> &middot; <a href="https://twitter.com/hotmusicpro" target="_blank">Twitter</a> &middot; <a href="http://instagram.com/hotmusicpro" target="_blank">Instagram</a></p>
          </div>
        </div>
      </footer>
-->
      <?php echo Asset::js(array(
		'jquery.js',
		'bootstrap.js',
		'nhp.js'
	)); ?>
      
    </div><!-- /.container -->
