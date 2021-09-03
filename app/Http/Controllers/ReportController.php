<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ReportController extends Controller
{
    public function index($id)
    {
        //menginisiasi variabel parkir, kemudian mengambil data id pada model parkir
        $transaction=Transaction::where('id', $id)->get();

        //membuat variable pdf, kemudian ambil
        $pdf= PDF::loadview('transaction.report', compact('transaction'));
        return $pdf->stream();
    }
}
