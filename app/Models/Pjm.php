<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pjm extends Model
{
    use HasFactory;

    protected $table = "pjm";

    protected $fillable = [
        "company",
        "project",
        "business_partner",
        "business_partner_name",
        "estimated_revenue",
        "budget_amount",
        "estimate_profit",
        "line_amount_po",
        "line_amount_pin",
        "balance_to_utilize",
        "balance_actual",
        "balance_utilize"
    ];
}
