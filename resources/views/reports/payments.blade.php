<!DOCTYPE html>
<html>
<head>
    <title>Payment Report</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Payment Reccipt</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Enrollment No</th>
                <th>Student Name</th>
                <th>Paid Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payment->enrollment->enroll_no ?? '-' }}</td>
                    <td>{{ $payment->enrollment->student->name ?? '-' }}</td>
                    <td>{{ $payment->paid_date }}</td>
                    <td>{{ $payment->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
