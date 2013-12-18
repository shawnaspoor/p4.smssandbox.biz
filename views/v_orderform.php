	<div class ="container">
		
		<header class= "page-header">
			<h1>Baked Goods Order Form</h1>
		</header>

		<!--left-side with the baked goods order drop downs -->
		<div class="row" >
			<div class="span4" id="left-side">
				<form action="process.php" method="post">
					<h4>Choose a product</h4>

					<select class="bakedGoods" id="bakedGoods">
						<option >Chocolate Chip Cookies</option>
						<option>Brownies</option>
						<option>Peanut Butter Cookies</option>
						<option>Snickerdoodles</option>
					</select>
					<select class="dose" id="dose">
						<option >25mg</option>
						<option>50mg</option>
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