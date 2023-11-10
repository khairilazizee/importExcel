<?php

namespace App\Imports;

use App\Models\Pjm;
use Maatwebsite\Excel\Concerns\ToModel;

class PjmImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user = auth()->user();
        return new Pjm([
            "company" => $row[0],
            "project" => $row[1],
            "business_partner" => $row[2],
            "business_partner_name" => $row[3],
            "estimated_revenue" => $row[4],
            "budget_amount" => $row[5],
            "estimate_profit" => $row[6],
            "line_amount_po" => $row[7],
            "line_amount_pin" => $row[8],
            "balance_to_utilize" => $row[9],
            "balance_actual" => $row[10],
            "balance_utilize" => $row[11],
            "users_id" => $user->id,
        ]);
    }
}
