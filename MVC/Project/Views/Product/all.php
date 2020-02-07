<p>Текст</p>
<ul>
	<?php foreach ($products as $product): ?>
	<li>
		<a href="/index.php?route=product/one&id=<?php $product['id']; ?>">
			Название: <?php $product['name']; ?></a>
		Цена: <?php $product['price']; ?>
	</li>
	<?php endforeach; ?>
</ul>
