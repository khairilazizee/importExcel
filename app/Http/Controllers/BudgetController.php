<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use App\Exports\ExportBudget;
use App\Imports\ImportBudget;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class BudgetController extends Controller
{
    public function importView(Request $request)
    {
        $budgets = Budget::all();
        $totalMTD = $budgets->sum('mtd');
        $totalBudgetMTD = $budgets->sum('budget_mtd');
        $totalBalance = $budgets->sum('balance');
        return view('importFile', [
            'budgets'=> $budgets,
            'totalMTD' => $totalMTD,
            'totalBudgetMTD' => $totalBudgetMTD,
            'totalBalance' => $totalBalance
        ]);
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
