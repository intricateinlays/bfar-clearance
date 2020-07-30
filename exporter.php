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

    $this->WriteText(70, 102, 'Ian Escarro');
    $this->WriteText(70, 106, ''); // Company name
    $this->WriteText(70, 110, 'B7L4 Henaville Subd. Estaca, Compostela, Cebu 6003 Philippines');
    $this->WriteText(70, 114, '09228545058');

    $this->WriteText(70, 126, $invoice->customer_name);
    $this->WriteText(70, 130, $invoice->customer_address);
    $this->WriteText(70, 134, 'Personal use - merchandize');

    $this->WriteText(36, 202, 'MOP (Pinctada maxima)'); // Should depend on the item containing shell (e.g. Paua, Hammer, etc)
    // $this->WriteText(36, 202, 'Orange spiny (spondylus)');
    $this->WriteText(76, 202, 'Fashion Jewelry');
    $this->WriteText(122, 202, '1/4 kg');
    $this->WriteText(160, 202, '$100.00');

    $pageId = $this->importPage(2);
    $this->addPage();
    $this->useTemplate($pageId, ['adjustPageSize' => true]);

    $this->WriteText(150, 167, 'Ian Escarro');

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

//     $from = "Ian Escarro
// B7L4 Henaville Subd. Estaca Compostela 6003 Philippines
// Phone: +639228545058
// Email: ian.escarro@gmail.com";
//     $this->MultiCell(80, 7, $from, 1, 'L');

//     $customer_name = $invoice->customer_name;
//     $to = "$customer_name";
//     $this->MultiCell(80, 7, $to, 1, 'L');
//     $this->Output();
//   }

}
