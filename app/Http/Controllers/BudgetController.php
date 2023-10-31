<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportBudget;
use App\Exports\ExportBudget;
use App\Models\Budget;

class BudgetController extends Controller
{
    public function importView(Request $request)
    {
        return view('importFile');
    }

    public function import(Request $request)
    {
        Excel::import(new ImportBudget, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportBudget(Request $request)
    {
        return Excel::download(new ExportBudget, 'budget_data.xlsx');
    }
}
