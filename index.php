<?php

require __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$snappy = new Pdf('/usr/local/bin/wkhtmltopdf -T 0 -R 0 -L 0 -B 0 --title "CV Maarten Waegeman"');
$rootUrl = "http://web/";

header('Content-Type: application/pdf');

$documents=array(
	$rootUrl . "cv.php?language=nl",
	$rootUrl . "cv.php?language=en"

);
echo $snappy->getOutput($documents);