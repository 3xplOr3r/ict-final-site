<?php
require_once('fpdf/fpdf.php'); // Include the FPDI library
require_once('vendor/autoload.php');

// File path to your PDF
$pdf_file = 'routine2023.pdf'; // Replace 'your_pdf.pdf' with your PDF file

// User-provided array input (change this based on your form input method)
$user_input = array(66662, 66652, 76542); // Array containing values to search for

// Initialize FPDI
$pdf = new FPDI();

// Iterate through each page of the PDF to extract text
$pageCount = $pdf->setSourceFile($pdf_file);

for ($pageNum = 1; $pageNum <= $pageCount; $pageNum++) {
    $tpl = $pdf->importPage($pageNum);
    $text = $pdf->getPageContent($pageNum);

    // Split text content into rows based on newlines or any other pattern specific to your PDF
    $rows = explode("\n", $text);

    // Loop through the rows to search and extract data
    foreach ($rows as $row) {
        // Split the row into columns based on the separator or structure of your PDF
        $columns = explode(" ", $row); // Adjust this based on how columns are separated in your PDF

        // Check if the first column value matches any of the user-provided values
        if (in_array($columns[0], $user_input)) {
            // If there's a match, fetch the entire row data
            $rowData = implode(", ", $columns); // Assuming columns are separated by a comma
            
            // Output or store the fetched row data
            echo "Match found for {$columns[0]}: $rowData<br>";
            // Store or process $rowData as needed
        }
    }
}
?>
