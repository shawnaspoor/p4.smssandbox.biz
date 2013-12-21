<div id="wrap">
	<div class="row-fluid">
		<div class="span12">
			<div class="row">
				<div class="span4">	
					<div class="product">
						<img src="/images/whoopiepies.jpg" alt="whoopie pies"/>
					</div>
				</div>
				<div class="span6">
					<div class="title>">
						<h1>Whoopie Pies</h1>
					</div>



					<div>
						<p>Whoopie pies feature a generous helping of vanilla cream filling sandwiched between rich chocolate cake.</p>
					</div>
					<div id="priceStructure">
						<?=$pricestructure;?>
					</div>
					<form action="../cart/cart" method="get">
					<select class="dose" id="dose" name="id">
						<option value="11">25mg</option>
						<option value="12">50mg</option>
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
