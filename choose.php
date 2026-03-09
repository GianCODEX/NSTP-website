<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$query = "SELECT * FROM indigency_requests WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    die("Certificate not found.");
}

$row = mysqli_fetch_assoc($result);


$ageStatus = ($row['age'] >= 18) ? "of legal age" : "a minor";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Barangay Indigency Certificate</title>

    <style>
        body {
            background: #f2f2f2;
            font-family: "Times New Roman", serif;
        }

        .certificate {
            width: 816px;
            /*height: 1056px;*/
            height: 1040px;
            margin: 40px auto;
            background: white;
            padding: 60px;
        }

 
        .header {
            text-align: center;
        }

        .header h2 {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .header h3 {
            font-size: 18px;
            margin: 6px 0;
        }

        .header p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .header hr {
            margin: 25px 0;
        }

        .content {
            margin-top: 40px;
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        .footer {
            margin-top: 80px;
            display: flex;
            justify-content: space-between;
        }

        .signature {
            text-align: center;
            width: 40%;
        }

     @media print {
    .no-print {
        display: none !important;
    }
}

.print-container {
    text-align: center;
    margin: 30px 0;
}

.print-btn {
    background-color: #1e73be; 
    color: white;
    border: none;
    padding: 12px 28px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
}

.print-btn:hover {
    background-color: #155a96;
}

.back-btn {
    background-color: #6b7280; /* gray */
}

.back-btn:hover {
    background-color: #4b5563;
}

    </style>
</head>

<body>

<div id="print-area">
    <div class="certificate">

        <div class="header">
            <h2>REPUBLIC OF THE PHILIPPINES</h2>
            <h3>Barangay Balintawak</h3>
            <p>Lipa City, Batangas</p>
            <hr>
            <h3>Certificate of Indigency</h3>
        </div>

        <div class="content">
            <p>
                This is to certify that
                <strong><?php echo htmlspecialchars($row['last_name'] . ", " . $row['first_name'] . " " . $row['middle_initial']);?></strong>,
                <?php echo $ageStatus; ?>, a
                <?php echo htmlspecialchars($row['citizenship']); ?> citizen,
                residing at Purok <?php echo htmlspecialchars($row['purok']); ?>,
                is known to this Barangay.
            </p>

            <p>
                This certification is issued upon request of the above-named person
                for the purpose of <strong><?php echo htmlspecialchars($row['purpose']); ?></strong>.
            </p>

            <p>
                Issued this <?php echo date("jS"); ?> day of <?php echo date("F Y"); ?>.
            </p>
        </div>

        <div class="footer">
            <div class="signature">
                ___________________________<br>
                Barangay Secretary
            </div>

            <div class="signature">
                ___________________________<br>
                Barangay Captain
            </div>
        </div>

    </div>
</div>

<div class="print-container no-print">
    <button class="print-btn back-btn" onclick="window.location.href='../choose.php'">← Back</button>
    <button class="print-btn" onclick="window.print()">
        Print / Save as PDF
    </button>
</div>


</body>
</html>