<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3"><br/><br/>
			<?php echo Html::anchor('eventproducers/create', 'Sign up to compete', array('class' => 'btn btn-success btn-lg btn-block')); ?>
			<br/><br/>
		</div>
	</div>
</div>


<div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h1>The rules</h1>
            <hr>
          </div>
        </div>
</div>
<div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <dl>
                <dt>Registration fee</dt>
                    

                    <dd>
                        The registration fee is $50 per contestant. Each contestant receives five tickets for their guests.
                    </dd>
                <br>

                <dt>First & second rounds</dt>
                    

                    <dd>
                        For the first and second rounds of competition, the beats must contain a sample from a pre-approved list of reggae songs.
                    </dd>
                <br>

                <dt>Sudden death elimination</dt>
                    

                    <dd>
                        The competition is sudden death elimination and there are 3 rounds. Each round will consist of head to head competition in which the winner advances to the next round and the loser is eliminated.
                    </dd>
                <br>

                <dt>The microphone</dt>
                    

                    <dd>
                        During each round the participant has access to the microphone and can use it as he chooses to sing, rap, beat-box, or play an instrument. No other artist can perform to the beat.
                    </dd>
                <br>

                <dt>Rounds</dt>
                    

                    <dd>
                        The first round is 90 seconds (two 45 second beats can be played). The second and third rounds are 60 seconds each.
                    </dd>
                <br>

                <dt>Tie</dt>
                    

                    <dd>
                        In the event of a tie, each participant will be given 30 seconds to play a single beat.
                    </dd>
                <br/>

                <dt>Submitting music before the show</dt>
                    

                    <dd>
                        All music must be submitted on CD or flash drive at check-in. Please bring a backup copy and label both with your name!
                    </dd>
               <br>

                <dt>The judges</dt>
                    

                    <dd>
                        There is a panel of three judges. Rounds 1 and 2 are decided by majority vote. During round 3 the judges will choose the top two producers and the crowd’s cheers determine who is crowned the Next Hot Music Producer!
                    </dd>
                
                <br/>
                  <dt>Your image & music</dt>
                    

                    <dd>
						Each participant must be willing to sign a release to have their image and music appear on Next Hot Music Producer©. You retain 100% ownership of your music.
					</dd>
                
                <br/>
                 <dt>18 +</dt>
                   

                    <dd>
						You must be 18 years of age to enter the competition and venue.
					</dd>
                
                <br/>
                <dt>What competitors need to submit</dt>
                    

                    <dd>
						Each participant must submit a photo and two beats to <a href="mailto:mike@hotmusicproducer.com">mike@hotmusicproducer.com</a>. Each producer must have 5 beats for the show.
					</dd>
                
                <br/>
				<dt>Venue</dt>
                    

                    <dd>
						This event will be held at the Middle East Upstairs, located at 472-480 Massachusetts Ave in Cambridge,  on March 6th. The show begins at 6:00 pm. Entrance to the venue is at the discretion of the Middle East and its agents.
					</dd>
               
                <br/>
				<dt>Original session</dt>
                    

                    <dd>
						Each participant must be able to produce the original session, upon request, for any beats they play.
					</dd>
                
                <br/>
              </dl>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Call 662.588.4537 for more info</h2>
            <hr>
          </div>
        </div>
        
            
        </div>
    </div>




<h2>Listing <span class='muted'>EventProducers</span></h2>
<br>
<?php if ($eventProducers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<!-- <th>Eventproducer id</th> -->
			<th>Event id</th>
			<th>Producer id</th>
			<th>Showonevent</th>
			<th>Eventposition</th>
			<th>Updateviaemail</th>
			<th>Soundcloud link</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($eventProducers as $item): ?>		<tr>

			<!-- <td><?php echo $item->eventproducer_id; ?></td> -->
			<td><?php echo $item->event_id; ?></td>
			<td><?php echo $item->producer_id; ?></td>
			<td><?php echo $item->showonevent; ?></td>
			<td><?php echo $item->eventposition; ?></td>
			<td><?php echo $item->updateviaemail; ?></td>
			<td><?php echo $item->soundcloud_link; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('eventproducers/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventproducers/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('eventproducers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No EventProducers.</p>

<?php endif; ?><p>
	

</p>
