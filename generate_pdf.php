<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            border: 2px solid #333;
            padding: 20px;
            border-radius: 10px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        .bill-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .bill-details div {
            width: 48%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Gas Bill</h1>
        </header>
        <?php

          if (isset($_POST["id"])) {
            $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");
            $print_term = $_POST["consumer_id"];

            $sql = "SELECT * FROM add_bill WHERE consumer_id = '$print_term'";
            $result = mysqli_query($conn, $sql) or die("Query Failed");
        
            if(mysqli_num_rows($result)> 0){
                while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="bill-details">
            <div>
                <p><strong>Customer Name:</strong><?php echo $row['bill_id'] ?></p>
                <p><strong>Address:</strong><?php echo $row['bill_id'] ?></p>
            </div>
            <div>
                <p><strong>Due Date:</strong> <?php echo $row['bill_id'] ?></p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount (USD)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row['bill_id'] ?></td>
                    <td><?php echo $row['bill_id'] ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['bill_id'] ?></td>
                    <td><?php echo $row['bill_id'] ?></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <?php  }
            }

          }
        ?>          
        <div class="total">
            <p><strong>Total Amount:</strong><?php echo $row['bill_id'] ?></p>
        </div>
    </div>
</body>
</html>





















<!-- <?php
// if (isset($_POST['generate_pdf'])) {
//     require_once('tcpdf/resources/autoload.php');

//     // Your database connection and data retrieval code here (as mentioned in the previous answer)
//     $conn = mysqli_connect("localhost", "root", "", "sui_gas");
//     // Fetch data from your table
//     $query = "SELECT * FROM add_bill";
//     $result = $conn->query($query);

//     // Check if there are rows in the result
//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             // Process each row of data
//             // You can use $row['column_name'] to access specific columns
//         }
//     } else {
//         echo "No records found";
//     }

//     // Close the database connection
//     $conn->close();


//     $pdf = new autoload();
//     $pdf->SetAutoPageBreak(true, 10);

//     // Add a page
//     $pdf->AddPage();

//     // Set font
//     $pdf->SetFont('times', '12', '', '', true);

//     // Output data to PDF
//     $pdf->Cell(0, 10, 'Your Data:', 0, 1, 'C');
//     $pdf->Ln(10); // Add some space

//     // Loop through your data and add it to the PDF
//     while ($row = $result->fetch_assoc()) {
//         $pdf->Cell(0, 10, $row['column1'].' - '.$row['column2'], 0, 1);
//     }

//     // Output PDF to the browser or save to a file
//     $pdf->Output('output.pdf', 'D');
// }
?> -->
