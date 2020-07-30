<?php

function to_object($array) {
  return json_decode(json_encode($array));
}

$invoice = json_decode($_GET['invoice']);
$invoice_items = array();

require_once('exporter.php');

$exporter = new Exporter();
$exporter->exportPackingList($invoice);