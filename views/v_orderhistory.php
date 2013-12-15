<div id="wrap">
	<div class="span12">	
	<div class="row-fluid">
	
		<h4>Order History</h4>
				
						<table class="table table-hover table-bordered table-condensed" style="width:80%">
						<tr>
							<th>
								Order Number
							</th>
							<th>
								Item
							</th>
							<th>
								Quantity
							</th>
						</tr>
						<?php foreach ($orders as $order): ?>
						<tr>
							<td>
								<?=$order['order_no']?>
							</td>
							<td>
								<?=$order['productName']?> 
							</td>
							<td>
				   			 <?=$order['quantity']?> 

				   			</td>
				   		</tr>
				   		<?php endforeach; ?>
				   	</table>

			

		</div>
	</div>
</div>