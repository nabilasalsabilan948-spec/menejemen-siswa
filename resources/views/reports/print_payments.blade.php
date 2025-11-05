<!DOCTYPE html>
<html>
<head>
    <title>Payments Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
        .title {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-print {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="title">
        <h2>Payment Report</h2>
        <button onclick="window.print()" class="btn-print">🖨️ Print</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Enrollment ID</th>
                <th>Paid Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $index => $payment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $payment->enrollment_id }}</td>
                    <td>{{ $payment->paid_date }}</td>
                    <td>{{ number_format($payment->amount, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
