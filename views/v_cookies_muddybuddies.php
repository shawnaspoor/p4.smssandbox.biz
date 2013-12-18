<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/muddybuddies.jpg" />
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Muddy Buddies</h1>
					</div>



					<div>
						<p>Do you like chocolate? Do you like friends? No but really, you need to like chocolate for these.
							So much chocolate. </p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="1">25mg</option>
						<option value="2">50mg</option>
					</select><br />
		
					<button type ="submit" name="action" value="add">
						Add to Shopping Cart
					</button>
				</form>
				</div>
			</div>	

		</div>
	</div>
</div>
