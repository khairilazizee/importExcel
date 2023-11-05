<?php

namespace App\Imports;

use App\Models\Budget;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBudget implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user = auth()->user();
        return new Budget([
            'financial_indicator' => $row[0],
            'division' => $row[1],
            'department' => $row[2],
            'actual_month' => $row[3],
            'date_uploaded' => date("Y-m-d", strtotime($row[4])),
            'mtd' => $row[5],
            'budget_mtd' => $row[6],
            'balance' => $row[7],
            'users_id' => $user->id,
        ]);
    }
}
