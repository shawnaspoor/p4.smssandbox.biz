<div id="wrap">
		<div class="span11">
			<div class="row-fluid">
				<div class="span6">	
					<div class="login">

					<h2> Login</h2>
					<form method='POST' action='/users/p_login'>
						Email &nbsp;<input type='text' name='email'><br>
						Password &nbsp;  <input type='password' name='password'><br>

						<?php if (isset($error)): ?>
							<div class='error'>
								Login attempt failed. Please check your username and password.
							</div>
							<br>
						<?php endif; ?>

						<input type='Submit' value='Log In'>

					</form>

					</div>		
				</div>
			</div>
		</div>
	</div>

