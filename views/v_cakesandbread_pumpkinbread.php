<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/pumpkinbread.jpg" alt="pumpkin bread"/>
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Pumpkin Bread</h1>
					</div>



					<div>
						<p>This seasonal favorite is moist but spicey, featuring a subtle pumpkin favor.</p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="13">25mg</option>
						<option value="14">50mg</option>
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
