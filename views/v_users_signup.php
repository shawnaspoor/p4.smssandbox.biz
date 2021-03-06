
<div id="wrap">
		<div class="span11">
			<div class="row-fluid">
		
			
					<div class="signup">
						<br />
						<h3>Sign Up</h3>
						<form method='Post' action='/users/p_signup' id="signup" >
								
									<h4>First Name</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="first_name" name="first_name" class="required" maxlength="25">
									<div class="length" id="firstlength"></div>
							
									<h4>Last Name</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="last_name" name="last_name" class="required" maxlength="25">
									<div class="length" id="lastlength"></div>
					
				
									<h4>Email Address</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="email" name="email" maxlength="45" class="required">
									<div class="length" id="emaillength"></div>
									

									<h4>Phone Number (no () or -'s please, just numbers)</h4><br>
									<input type="text" id ="phoneNo" name="phoneNo" maxlength="30" class="required">
									<div class="length" id ="phoneNolength"></div>	
			
									<h4>Password</h4>
									<div class="requiredinput">*</div><br>
									<input type="password" id ="inputPassword" name="password" class="required" >
									<div class="length" id="passwordlength"></div>

									<h4>Street Address</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="billingAddress" name="billingAddress" maxlength="30" class="required">
									<div class="length" id="billingaddresslength"></div>	

									<h4>Street Address 2</h4><br>
									<input type="text" id="billingAddress2" name="billingAddress2" maxlength="30">
									<div class="length" id="billingAddresslength2"></div>	

									<h4>City</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="city" name="city" maxlength="30" class="required">
									<div class="length" id="citylength"></div>

									<h4>State (postal abbreviation)</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="state" name="state" maxlength="30" class="required">
									<div class="length" id="statelength"></div>
									
									<h4>Zipcode</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="zipcode" name="zipcode" maxlength="6" class="required">
									<div class="length" id="zipcodelength"></div>


									<h4>License Number (full 8 character string)</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="licenseNo" name="licenseNo" maxlength="30" class="required">
									<div class="length" id="licenselength"></div>
							
							
							
							<?php if(isset($error) && $error == 'blank-fields'): ?>
						        <div>
						           <p>Oopsy. It appears you're missing required info. Please fill out all fields.</p> 
						        </div>
						        

						    <?php endif; ?>


						    <?php if(isset($error) && $error == 'email-exists'): ?>
						        <div class='error'>
						             <p>That email address already appears to exist.</p> 
						        </div>
						        
						    <?php endif; ?>

							
							<div class="control-group">
								<div class="controls">
									<button id="button" type="submit" class="btn btn-primary">Sign Up</button>
								</div>
							</div>
				<br />
				<br />
				</form>
			</div>
		</div>
	</div>
</div>

