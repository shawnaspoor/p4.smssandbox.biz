	<div class ="container">
		
		<header class= "page-header">
			<h1>Baked Goods Order Form</h1>
		</header>

		<!--left-side with the baked goods order drop downs -->
		<div class="row" >
			<div class="span4" id="left-side">
				<form action="process.php" method="post">	
					<h4>Name</h4><div class="requiredinput">*</div><br>
					<input type="text" id ="name" name="name" class="required" maxlength="25">
					<div class="length" id="namelength"></div>
					

					<h4>Billing Address</h4><div class="requiredinput">*</div><br>
					<input type="text" id ="billingAddress" name="billingAddress" maxlength="30">
					<div class="length" id ="billingaddress"></div>	


					<h4>State, City, Zipcode</h4><div class="requiredinput">*</div><br>
					<input type="text" id ="state" name="state" maxlength="30">
					<div class="length" id="statelength"></div>

					<h4>Email Address</h4><div class="requiredinput">*</div><br>
					<input type="text" id ="email" name="email" maxlength="30">
					<div class="length" id="emaillength"></div>

					<h4>Choose a yummy!</h4>

					<select class="bakedGoods" id="bakedGoods">
						<option >Chocolate Chip Cookies</option>
						<option>Brownies</option>
						<option>Peanut Butter Cookies</option>
						<option>Snickerdoodles</option>
					</select>
					<br> <br>
					<p class="inline" >Please specify how many </p><div class="inline"  id="bakedGood"></div><p class="inline" > you would like.</p>


					<h4>How many yummys!</h4>
						<input type="text" class="quantity" id="quantity" maxlength="2" >
						<div id="length"></div>
						
						<div class='error' id="quantityError"></div>	
							<input type="button" class="btn btn-info" id="addInvoiceLine"	value="Add Baked Good to Invoice">
			
					
			
				</form>	
			</div>
		
		<!--right side with order form display -->
		
		 <div class="span7">
		 	<div id="invoice">
			 	<div class="row">
	  				<div class="span3">
						<div id="purchaserName">Purchaser Name
							<div id="nameOut"></div>
						</div>
					</div>
					<div class="span3">
						<div id ="purchaserInfo">Contact Information
							<div id="contactInfo">
								<div id="billingAddressOut"></div>
								<div id="stateOut"></div>
								<div id="emailOut"></div>
							</div>
						</div>
					</div>
					<!--<div id="updatedInvoiceLineNumber"></div>-->
					<div class="row">
		  				<div class="span4">
							<div class="invoiceGoods">Baked Goods<br /><br />
								<div id="orderLineItem"></div>
					   	 	</div>
					   	</div>
					<div class="span2">   	
						<div class="invoiceQuantity">Quantity<br /><br />
							<div id="orderLineQuantity"></div>
						</div>
					</div>	
					
					<div class="row">
						<div class="span6">
							<div class = "total">Total:
								<div id="total"></div>
						    </div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<br>
			<button class="button, btn btn-success" id="button" value="Add">Submit Invoice</button>
			<input type="button" class="print, btn btn-primary" id="print"	value="Print Your Invoice" />
			<button class="removeInvoiceLines, btn btn-danger" id="removeInvoiceLines" value="Clear">Start Over</button>**


			<div id="link"></div><br>
			<p>** The start over button doesn't play very nice with Firefox, so while it will reset the order form it will not reset your input. Sorry!</p>
		</div>
	


	</div>
</div>

<script src="js/orderform.js"></script>

</body>
</html>