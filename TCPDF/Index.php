<?php
include_once("vendor/autoload.php");

// Create new TCPDF object
$pdf = new TCPDF();
// Set document properties
$pdf->SetCreator('Localhost');
$pdf->SetAuthor('Ramajayam.k');
$pdf->SetTitle('Testing TCPDF');
$pdf->SetSubject('Learning PHP TCPDF Library');
$pdf->SetKeywords('Example');

// Add a page
$pdf->AddPage();

// Set some content
$pdf->SetFont('helvetica', '', 12);
$pdf->Write(0, 'Hello, this is a test PDF created with TCPDF!');

// Output PDF
$pdf->Output('example.pdf', 'I');
