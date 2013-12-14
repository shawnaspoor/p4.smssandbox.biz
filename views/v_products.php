<?php foreach ($products as $product): ?>

	<div class = "product">

		<?=$product['productID']?> <?=$user['productName']?> <?=$user['pricePerUnit']?>
	</div>

<?php endforeach; ?>	