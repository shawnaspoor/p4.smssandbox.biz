<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/coconutoatmeal.jpg" />
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Coconut Oatmeal Cookies</h1>
					</div>



					<div>
						<p>These thin and crispy cookies are delicious and filling.</p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="5">25mg</option>
						<option value="6">50mg</option>
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
