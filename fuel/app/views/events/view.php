
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
<?php echo Asset::css(array('//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css')); ?>
      <?php echo Asset::js(array(
		'jquery.js',
		'//code.jquery.com/ui/1.10.4/jquery-ui.js',
		'bootstrap.js',
		'nhp.js',
	)); ?>

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
		  	<br/><strong>Show:  6pm</strong>
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
	<div style="background-color:#e5e5e5;border-top:#a6a6a6 1px solid;border-bottom:#a6a6a6 1px solid;">
	<div class="container" style="padding-bottom:30px;">
		<div class="row">
			<div class="col-lg-3 text-center">
				<h1 style="margin-left:-50px;">Host</h1>
				<!--
<div class="container">
		<div class="row mt centered">
			<div class="col-lg-4">
-->
				<img src="../../assets/img/team/latrell.png" alt="latrell" style="margin-left:-50px; margin-top:40px;" >
				<div class="cardinfo" style="margin-left:-50px;">
					<h4><b>LATRELL JAMES</b></h4>
					<h6>PRODUCER/RECORDING ARTIST</h6>
					<p>Latrell James, formerly known as Sunni Carson, is a fresh developed recording artist and producer ready to be pushed to the worldwide market. He is also the co-founder of 5-Star Generals music production company as well as Scholar Camaraderie (an independent brand). Latrell James always had the passion for music; writing lyrics, poetry and producing beats since the young age of seven. James is an exceptional recording artist where words cannot explain his ability on the microphone or behind any production workstation. Since the establishment of his independent brand, Scholar Camaraderie in December 2011, Latrell James has been consistently performing at venues like West End Johnnies, Church of Boston, Middle East Downstairs, Webster Hall in New York City and many more. He has released two projects in 2011: his mixtapes, the "Sunni Carson Project" and "The Initiation", feature lead singles: "When I'm On" (Sunni Cason Project/The Initiation), "Geesh”, "Another Go" and “Where Were You At”. 
</p>
					<p><a href="https://www.facebook.com/latrelljamesmusic" target="_blank" class="lnkSocial" title="Latrell James Music" data-placement="bottom"><i class="fa fa-facebook"></i></a><a href="http://twitter.com/iamlatrelljames" target="_blank" class="lnkSocial" title="@iamlatrelljames" data-placement="bottom"><i class="fa fa-twitter"></i></a></p>
				</div>
			<!-- </div></div></div> -->
			</div>
			<div class="col-lg-9 text-center">
				<h1>Judges</h1>
				<!-- TEAM MEMBERS -->
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-4">
				<img src="../../assets/img/team/mark.png" width="250" alt="Mark Merren" style="margin-left:-2px; margin-top:40px;" >
				<div class="cardinfo">
					<h4><b>MARK MERREN</b></h4>
					<h6>EMCEE/PRODUCER</h6>
					<p>Mark Merren is an emcee/producer from Dorchester in Boston,MA. He is a well seasoned artist that has been performing & recording music since his childhood. His concious witty lyricism & wordplay bridges the gap between underground and mainstream audiences alike. Mark hosts the hottest hip-hop showcase in Boston, Motivate Mondays at Church Boston, the best place for upcoming talent.</p>
					<p><a href="https://www.facebook.com/pages/Mark-Merren-Music/153107458064163" target="_blank" class="lnkSocial" title="Mark Merren Music" data-placement="bottom"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/MARKMERREN" target="_blank" class="lnkSocial" title="@MARKMERREN" data-placement="bottom"><i class="fa fa-twitter"></i></a></p>
				</div>
			</div>
			<div class="col-lg-4">
				<img src="../../assets/img/team/Dave5.jpg" width="250" alt="Dave Day" style="margin-left:-2px; margin-top:40px;">
				<div class="cardinfo">
					<h4><b>DAVE DAY</b></h4>
					<h6>MMMMAVEN PROJECT</h6>
					<p>With over 20 years in the music industry, David Day has worn many different hats: label manager, editor, music journalist, retail, distribution, you name it. Most recently, here in Boston, he founded the Together Festival, Boston's springtime celebration of Music, Art and Technology (now in year 5) and remains the festival's Creative Director. Two years ago, he co-founded the Mmmmaven Project, an educational initiative in Central Square, Cambridge, where he serves as Director, managing marketing, social media and human resources.</p>
					<p><a href="https://www.facebook.com/MMMMAVEN" target="_blank" class="lnkSocial" title="Mmmmaven Project" data-placement="bottom"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/mmmmaven" target="_blank" class="lnkSocial" title="Mmmmaven Project" data-placement="bottom"><i class="fa fa-twitter"></i></a></p>
				</div>
			</div>
			<div class="col-lg-4">
				<img src="../../assets/img/team/darcie.png" width="250" alt="Darcie Nicole" style="margin-left:-2px; margin-top:40px;">
				<div class="cardinfo">
					<h4><b>DARCIE NICOLE</b></h4>
					<h6>VOCALIST/SONGWRITER/COACH</h6>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<p><a href="https://www.facebook.com/askdarcie" target="_blank" class="lnkSocial" title="Darcie Nicole" data-placement="bottom"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/AskDarcie" target="_blank" class="lnkSocial" title="@ASKDARCIE" data-placement="bottom"><i class="fa fa-twitter"></i></a></p>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- container -->
			</div>
		</div>
	</div>
	<div style="background-color:#d9d9d9;padding-bottom:30px;">
	<div class="container" style="margin-left:50px;">
	<div class="row centered" >
		<div class="col-md-12 text-center">
			<h1>Prizes</h1>
		</div>
	</div>
	<div class="row centered">
	<div class="col-md-10 col-md-offset-1 text-center wrapper">
	<iframe src="http://player.vimeo.com/video/84995260?api=1&player_id=vimeoplayer" width="100%" height="480px"></iframe>
	<div class="cardinfo"><a href="http://vimeo.com/15213281" target="_blank">
				<h4><b>1ST PLACE PRIZE:</b></h4>
				<h6>MUSIC VIDEO PRODUCED BY AWARD WINNING DIRECTOR DARREN COLE</h6>
	</a>
				</div>
	</div>
	
	</div>
	<br/><br/>
		<div class="row mt centered">
			<div class="col-lg-4"><a href="http://uturnaudio.com/" target="_blank">
				<img class="img-rounded" src="../../assets/img/uTurnAudio.png" alt="uTurnAudio"/>
				<div class="cardinfo">
				<h4><b>1ST PLACE PRIZE: </b></h4>
				<h6>U-TURN AUDIO TURN TABLE</h6>
				</div></a>
			</div>
			<div class="col-lg-4"><a href="http://www.rosienevins.com/" target="_blank">
				<img class="img-rounded" src="../../assets/img/camera.png" alt="Rosie Nevins Photography"  />
				<div class="cardinfo">
				<h4><b>2ND PLACE PRIZE: </b></h4>
				<h6>PHOTOGRAPHY BY ROSIE NEVINS</h6>
				</div></a>
			</div>
			<div class="col-lg-4"><a href="http://www.guitarcenter.com/" target="_blank">
				<img class="img-rounded" style="margin:28.5px 0px;" src="../../assets/img/guitarCenter.png" alt="Guitar Center"  />
				<div class="cardinfo">
				<h4><b>2ND PLACE PRIZE: </b></h4>
				<h6>$ 75 GIFT CERTIFICATE TO GUITAR CENTER</h6>
				</div></a>
			</div>
		</div>
		</div>
	</div></div>
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

      
    </div><!-- /.container -->