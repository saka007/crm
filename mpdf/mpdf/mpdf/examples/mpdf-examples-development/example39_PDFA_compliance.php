<?php



$html = '
<h1>mPDF</h1>
<h2>PDFA Compliance</h2>
<p>PDF/A1-b is a file format for the long-term archiving of electronic documents. This is an example of a PDF/A1-b compliant files.</p>
';
//==============================================================
//==============================================================
//==============================================================
$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->PDFA = true;
$mpdf->PDFAauto = true;
$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================
