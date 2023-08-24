<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('../includes/conn.php');
require('../includes/TCPDF/tcpdf.php');

if (isset($_POST['download'])) {
    $id = $_POST['id'];

    $cmd = "SELECT * FROM candidates WHERE id = $id";
    $candidates = mysqli_query($conn, $cmd);
    $candidateData = mysqli_fetch_assoc($candidates);

    if ($candidateData) {
        // Create PDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Biplob Ahmed');
        $pdf->SetTitle('Candidate Data');
        $pdf->SetSubject('Candidate Data');
        $pdf->SetKeywords('Candidate, Data');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add a page
        $pdf->AddPage();

        // HEADING
        $pdf->SetFont('helvetica', 'B', 18);
        $pdf->cell(0, 10, 'Personal Information' , 0, 1);
        $pdf->setLineWidth(1.4);
        $pdf->Line($pdf->GetX(), $pdf->GetY(), $pdf->GetX() + $pdf->getPageWidth(), $pdf->GetY());

        // Format and display candidate data
        $pdf->setFont('helvetica' , '' , 12);
        $pdf->Cell(0, 10, 'Name: ' . $candidateData['uname'], 0, 1);
        $pdf->Cell(0, 10, 'Date of Birth: ' . $candidateData['dob'], 0, 1);
        $pdf->Cell(0, 10, 'Number: ' . $candidateData['num'], 0, 1);
        $pdf->Cell(0, 10, 'Gender: ' . $candidateData['gender'], 0, 1);
        $pdf->Cell(0, 10, 'Email: ' . $candidateData['email'], 0, 1);
        $pdf->Cell(0, 10, 'Passed Exam: ' . $candidateData['exam'], 0, 1);
        $pdf->Cell(0, 10, 'GPA: ' . $candidateData['gpa'], 0, 1);
        $pdf->Cell(0, 10, 'Passing Year: ' . $candidateData['pass_year'], 0, 1);
        $pdf->Cell(0, 10, 'Department: ' . $candidateData['dep'], 0, 1);

        // Add the candidate's image to the PDF
        $imageHeight = 50;
        $imageWidth = 40;
        $pageHeight = $pdf->getPageHeight();
        $pageWidth = $pdf->getPageWidth();
        $imageX = $pageWidth - $imageWidth - 20;
        $imageY = 20;



        $imagePath = '../includes/files/' . $candidateData['pic']; // Replace with the actual path to the candidate images
        $pdf->Image($imagePath, $imageX, $imageY , $imageWidth , $imageHeight, '', '', 'T', false, 300, '', false, false, 0, false, false, false);

        $pdf->Ln(3);

        // Output the PDF as a file to download
        $pdf->Output($candidateData['uname'] . ".pdf", 'D');
    } else {
        echo "Candidate not found.";
    }
}
?>
