<?php

// reference the Dompdf namespace
include_once ("./third-party/dompdf/autoload.inc.php");
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
// $html = file_get_contents_curl("http://localhost/view/verProformaView.php/id=1?");
// $dompdf->loadHtml(utf8_decode($html));

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream("document.pdf" , ['Attachment' => 0]);


function file_get_contents_curl($url) {
	$crl = curl_init();
	$timeout = 5;
	curl_setopt($crl, CURLOPT_URL, $url);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	$ret = curl_exec($crl);
	curl_close($crl);
	return $ret;
}