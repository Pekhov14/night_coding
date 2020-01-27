<?php

function fill_brand($pdo) {
	$output = '';
	$sql = 'SELECT * FROM brand';
	$stmt = $pdo->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $res)
		$output .= '<option value="'. $res['brand_id'] .'">' . $res['brand_name'] .'</option>';

	return $output;
}

function fill_product($pdo) {
	$output = '';
	$sql = 'SELECT * FROM product';
	$stmt = $pdo->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $res) {
		$output .= '<div class="col-md-3"> ';
		$output .= '<div style="border:1px solid #ccc; padding: 20px; margin-bottom: 20px;">' . $res['product_name'];
		$output .= '</div>';
		$output .= '</div>';
	}
	return $output;
}