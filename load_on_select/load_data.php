<?php
	require 'connect.php';

	$output = '';

	if(isset($_POST["brand_id"])) {
		if ($_POST["brand_id"] != '')
			$sql = "SELECT * FROM product WHERE brand_id = '" . $_POST["brand_id"] . "'";
		else
			$sql = "SELECT * FROM product";

		$stmt = $pdo->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($result as $res)
			$output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding: 20px; margin-bottom: 20px;">'. $res['product_name'] .'</div></div>';

		echo $output;
	}
