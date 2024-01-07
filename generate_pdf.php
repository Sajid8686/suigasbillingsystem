<?php
if (isset($_POST['generate_pdf'])) {
    require_once('tcpdf/tcpdf.php');

    // Your database connection and data retrieval code here (as mentioned in the previous answer)
    $conn = mysqli_connect("localhost", "root", "", "sui_gas");
    // Fetch data from your table
    $query = "SELECT * FROM add_bill";
    $result = $conn->query($query);

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Process each row of data
            // You can use $row['column_name'] to access specific columns
        }
    } else {
        echo "No records found";
    }

    // Close the database connection
    $conn->close();


    $pdf = new TCPDF();
    $pdf->SetAutoPageBreak(true, 10);

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('times', '12', '', '', true);

    // Output data to PDF
    $pdf->Cell(0, 10, 'Your Data:', 0, 1, 'C');
    $pdf->Ln(10); // Add some space

    // Loop through your data and add it to the PDF
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(0, 10, $row['column1'].' - '.$row['column2'], 0, 1);
    }

    // Output PDF to the browser or save to a file
    $pdf->Output('output.pdf', 'D');
}
?>
