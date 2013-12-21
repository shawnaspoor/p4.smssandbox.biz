<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/butterfingerbrownies.jpg" alt='butterfinger brownies'/>
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Butterfinger Brownies</h1>
					</div>



					<div>
						<p>Crunch peanut butter favor with chocolate and that childhood favorite! </p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="9">25mg</option>
						<option value="10">50mg</option>
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
