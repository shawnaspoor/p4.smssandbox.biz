<?php if(isset($user)): ?>
<div id="wrap">
	<div class="span12">	
	<div class="row-fluid">
	
	
		<div class="login">
		    <h2>Welcome back <?=$user->first_name?>!</h2>
					<div class="profile span7">
		
						<h4>Update your information here</h4>

						 <?php if(isset($error) && $error == 'blank-fields'): ?>
						        <div class='error'>
						           <p>Oopsy. It appears you're missing required info.</p> 
						        </div>
						        

						    <?php endif; ?>


						    <?php if(isset($error) && $error == 'email-exists'): ?>
						        <div class='error'>
						             <p>That email address already appears to exist.</p> 
						        </div>
						        
						    <?php endif; ?>
						<form class="form-horizontal" method='Post' action='/users/p_profile_update'>
									
									<h4>First Name</h4>
									<br>
									<input type="text" id ="first_name" name="first_name" class="required" maxlength="25" value='<?php echo $user->first_name; ?>'>
									
									<div class="length" id="namelength"></div>
							
									<h4>Last Name</h4>
									<br>
									<input type="text" id ="last_name" name="last_name" class="required" maxlength="25" value='<?php echo $user->last_name; ?>'>
									<div class="length" id="namelength"></div>
					
				
									<h4>Email Address</h4>
									<br>
									<input type="text" id ="email" name="email" maxlength="30" value='<?php echo $user->email; ?>'>
									<div class="length" id="emaillength"></div>
									

									<h4>Phone Number</h4><br>
									<input type="text" id ="phoneNo" name="phoneNo" maxlength="30" value='<?php echo $user->phoneNo; ?>'>
									<div class="length" id ="phoneNo"></div>	

									<h4>Street Address</h4><br>
									<input type="text" id ="billingAddress" name="billingAddress" maxlength="30" value='<?php echo $user->billingAddress; ?>'>
									<div class="length" id ="billingaddress"></div>	

									<h4>Street Address 2</h4><br>
									<input type="text" id ="billingAddress2" name="billingAddress2" maxlength="30" value='<?php echo $user->billingAddress2; ?>'>
									<div class="length" id ="billingaddress2"></div>	

									<h4>City</h4><br>
									<input type="text" id ="city" name="city" maxlength="30" value='<?php echo $user->city; ?>'>
									<div class="length" id="citylength"></div>

									<h4>State</h4><br>
									<input type="text" id ="state" name="state" maxlength="30" value='<?php echo $user->state; ?>'>
									<div class="length" id="statelength"></div>
									
									<h4>Zipcode</h4><br>
									<input type="text" id ="zipcode" name="zipcode" maxlength="30" value='<?php echo $user->zipcode; ?>'>
									<div class="length" id="zipcodelength"></div>


									<h4>License Number</h4><br>
									<input type="text" id ="licenseNo" name="licenseNo" maxlength="30" value='<?php echo $user->licenseNo; ?>'>
									<div class="length" id="licenselength"></div>
							

								<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-primary">Update Info</button>
								</div>
								<br>
							
							
							</div>
						</form>
								
						<h4>Who doesn't like a profile photo?</h4>
				
						<?php if ($user->avatar =='placeholder.jpg'): ?>
							display <img src="/uploads/avatars/example.gif" alt="Camera Shy Photo">';
						 <?php endif; ?>
						<img class="avatar" src="<?= $user->avatar ?>" alt="<?=$user->first_name ?>"><br> <br>
			
				 
						<form action="/users/profile_photo" method="post" enctype="multipart/form-data" >
						<input class="btn btn-default" type="file" name="avatar">
						<input class="btn btn-success" type='submit'>
						</form>



		</div>	
		<div class="span4" id="orderhistory">
			<h4>Order History</h4>
				<div>
					<?php foreach ($orders as $order): ?>

						<form method="post" id="orderid" class="order">
						    <h4><a href="/orderhistory/orderhistory?orderid=<?=$order['order_no']?>"><?=$order['order_no']?></a></h4>

						</form>

					<?php endforeach; ?>
		     	</div>
		</div>
	</div>
</div>
		
	<?php else: ?>
	    <h1>No user specified</h1>
	<?php endif; ?>
		</div>		
	</div>








