<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class ReportController extends Controller
{
    public function printReceipt($id)
{
    $payment = \App\Models\Payment::with(['enrollment.student', 'enrollment.batch'])->findOrFail($id);
    return view('reports.payment_receipt', compact('payment'));
}

}
