<?php

require "vendor/autoload.php";

$report   = new \App\S\Report();
$template = new \App\S\HtmlTemplate();

$template->render($report->renderReport());
