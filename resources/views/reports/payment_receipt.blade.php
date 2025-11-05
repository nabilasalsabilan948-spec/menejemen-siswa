<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 40px;
        }
        h2 {
            text-align: center;
            text-decoration: underline;
        }
        table {
            width: 100%;
            margin-top: 20px;
            font-size: 16px;
        }
        td.label {
            width: 200px;
            font-weight: bold;
            vertical-align: top;
        }
        hr {
            margin: 15px 0;
        }
        .batch {
            margin-top: 25px;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 10px 0;
            font-weight: bold;
        }
        .footer {
            text-align: right;
            margin-top: 40px;
            font-size: 15px;
        }
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body>

    <h2>Payment Receipt</h2>
    <hr>

    <table>
        <tr>
            <td class="label">Receipt No :</td>
            <td>{{ $payment->id }}</td>
        </tr>
        <tr>
            <td class="label">Date :</td>
            <td>{{ $payment->paid_date }}</td>
        </tr>
        <tr>
            <td class="label">Enrollment No :</td>
            <td>{{ $payment->enrollment->enroll_no ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Student Name :</td>
            <td>{{ $payment->enrollment->student->name ?? '-' }}</td>
        </tr>
    </table>

    <div class="batch">
        <table width="100%">
            <tr>
                <td>Batch</td>
                <td style="text-align:right;">Amount</td>
            </tr>
            <tr>
                <td>{{ $payment->enrollment->batch->name ?? '-' }}</td>
                <td style="text-align:right; font-weight:bold;">{{ number_format($payment->amount, 0) }}</td>
            </tr>
        </table>
    </div>

    <div class="footer">
        Printed Date : <strong>{{ date('Y-m-d') }}</strong>
    </div>

    <div class="no-print" style="text-align:center; margin-top:20px;">
        <button onclick="window.print()">🖨️ Print Receipt</button>
    </div>

</body>
</html>
