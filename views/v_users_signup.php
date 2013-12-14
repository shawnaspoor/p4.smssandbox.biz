<div id="wrap">
		<div class="row-fluid">
		<div class="span11">
			
					<div class="signup" id="signup">
						<h3>Sign Up</h3>
						<form class="form-horizontal" method='Post' action='/users/p_signup' id="signup">
							
							
								
									<h4>First Name</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="first_name" name="first_name" class="required" maxlength="25">
									<div class="length" id="namelength"></div>
							
									<h4>Last Name</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="last_name" name="last_name" class="required" maxlength="25">
									<div class="length" id="namelength"></div>
					
				
									<h4>Email Address</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" id ="email" name="email" maxlength="30">
									<div class="length" id="emaillength"></div>
									

									<h4>Phone Number</h4><br>
									<input type="text" id ="phoneNo" name="phoneNo" maxlength="30">
									<div class="length" id ="phoneNo"></div>	
			
									<h4>Password</h4>
									<div class="requiredinput">*</div><br>
									<input type="text" for="inputPassword" id ="inputPassword" name="password" maxlength="30">
									<div class="length" id="paswwordlength"></div>

									<h4>Street Address</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="billingAddress" name="billingAddress" maxlength="30">
									<div class="length" id ="billingaddress"></div>	

									<h4>Street Address 2</h4><br>
									<input type="text" id ="billingAddress2" name="billingAddress2" maxlength="30">
									<div class="length" id ="billingaddress2"></div>	

									<h4>City</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="city" name="city" maxlength="30">
									<div class="length" id="statelength"></div>

									<h4>State</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="state" name="state" maxlength="30">
									<div class="length" id="statelength"></div>
									
									<h4>Zipcode</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="zipcode" name="zipcode" maxlength="30">
									<div class="length" id="statelength"></div>


									<h4>License Number</h4><div class="requiredinput">*</div><br>
									<input type="text" id ="licenseNo" name="licenseNo" maxlength="30">
									<div class="length" id="statelength"></div>
							
							
							
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
									<button type="submit" class="btn btn-primary">Sign Up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>
