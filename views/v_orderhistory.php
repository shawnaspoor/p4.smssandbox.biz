<h4>Order History</h4>
<?php foreach ($orders as $order): ?>

	<article class="order">
	    <h3><?=$order['order_no']?></h3>   
	</article>

<?php endforeach; ?>