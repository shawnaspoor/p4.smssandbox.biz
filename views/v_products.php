<?php foreach ($products as $product): ?>
	<!-- list the site uers names-->
	<div class = "product">

		<?=$product['productID']?> <?=$user['productName']?> <?=$user['pricePerUnit']?>
	</div>

<?php endforeach; ?>	