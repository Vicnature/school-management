<?php
namespace App\Http\Controllers;
use App;
use Auth;
use App\Models\Payment;


use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function report1($pid){
    $payment=Payment::find($pid);
    $pdf=App::make('dompdf.wrapper');
    $print="<div style=margin:20px; padding:20px;>";
    $print.="<h1 align='center'>Payment Receipt<h1>";
    $print.="<hr/>";
    $print.="<p>Receipt No:<b>" .$pid ."</b></p>";
    $print.="<p> Date :<b> " .$payment->paid_date ."</b></p>";

    $print.="<p> Enrolment No : <b>" .$payment->enrolment->enrol_no . "</b></p>";
    $print.="<p> Student name :<b> ".$payment->enrolment->student->name. "</b></p>";
    $print.="<hr/>";
    $print.="<table style='width:100%;'>";
    $print.="<tr>";
    $print.="<td>Description </td>";
    $print.="<td> Amount </td>";
    $print.="</tr>";

    $print.="<tables>";
    $print.="<hr/>";

    $print.="<span> Printed By: <b>" . Auth::user()->name . "<b></span>";
    
    $print.="</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();

    }
    
}
