<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $table = "budget_actual_data";

    protected $fillable = [
        'financial_indicator',
        'division',
        'department',
        'actual_month',
        'date_uploaded',
        'mtd',
        'budget_mtd',
        'balance'
    ];
}
