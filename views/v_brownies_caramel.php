<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/caramelbrownie.jpg" />
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Caramel Peanut Butter Brownies</h1>
					</div>



					<div>
						<p>The title says it all. Caramel, peanut butter, and chocolate all together. There brownies are rich, so be prepared. </p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="7">25mg</option>
						<option value="8">50mg</option>
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
