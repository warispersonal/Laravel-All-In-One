<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    public function showEmployees(){
        $employee = Employee::all();
        return view('index', compact('employee'));
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = [
            'employee' => Employee::all()
        ];

        // share data to view
        $pdf = PDF::loadView('index', $data);

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
