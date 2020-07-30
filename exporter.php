<?php

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once('fpdf/fpdf.php');
require_once('fpdi2/src/autoload.php');

class Exporter extends Fpdi {

  function exportPackingList($invoice) {
    $pageCount = $this->setSourceFile('bfar.pdf');
    $pageId = $this->importPage(1);
    $this->addPage();
    $this->useTemplate($pageId, ['adjustPageSize' => true]);

    $this->WriteText(70, 102, $invoice->company_contact);
    $this->WriteText(70, 106, $invoice->company_name);
    $this->WriteText(70, 110, $invoice->company_address);
    $this->WriteText(70, 114, $invoice->company_phone);

    $this->WriteText(70, 126, $invoice->customer_name);
    $this->WriteText(70, 130, $invoice->customer_address);
    $this->WriteText(70, 134, 'Personal use - merchandize');

    $y = 202;
    foreach ($invoice->invoice_items as $invoice_item) {
      $this->WriteText(36, $y, $invoice_item->item_name);  
      $this->WriteText(76, $y, $invoice_item->description);
      $this->WriteText(122, $y, $invoice_item->weight);
      $this->WriteText(160, $y, '$' . $invoice_item->price);
      $y += 5;
    }

    $pageId = $this->importPage(2);
    $this->addPage();
    $this->useTemplate($pageId, ['adjustPageSize' => true]);

    $this->WriteText(150, 167, $invoice->company_contact);

    $this->Output();
  }

  function WriteText($x, $y, $text) {
    $this->SetFont('Helvetica');
    $this->SetFontSize(9);
    $this->SetTextColor(30, 30, 30);
    $this->SetXY($x, $y);
    $this->Write(0, $text);
  }

//   function exportPackingList($invoice) {
//     $this->AddPage();
//     $this->SetFont('Arial', 'B', 16);

//     $from = "Juan Dela Cruz
// Cebu City 6000 Philippines
// Phone: +639228112233
// Email: juan@mailinator.com";
//     $this->MultiCell(80, 7, $from, 1, 'L');

//     $customer_name = $invoice->customer_name;
//     $to = "$customer_name";
//     $this->MultiCell(80, 7, $to, 1, 'L');
//     $this->Output();
//   }

}
