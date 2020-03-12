<?php

require "vendor/autoload.php";
//
//$report   = new \App\S\Report();
//$template = new \App\S\HtmlTemplate();

//$template->render($report->renderReport());


$report     = new \App\O\Report();
//$repository = new \App\O\Report($report, new \App\O\FileSave('file.text'));
$repository = new \App\O\Report($report, new \App\O\DataBaseSave('Localhost', 'root', '', 'solid'));
$repository->save();
