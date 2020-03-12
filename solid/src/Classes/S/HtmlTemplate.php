<?php


namespace App\S;


class HtmlTemplate implements ITemplate {

	function render($data)
	{
		echo '<h1>' . $data . '</h1>';
	}
}