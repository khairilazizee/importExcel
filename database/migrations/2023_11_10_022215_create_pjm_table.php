<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjm', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('project');
            $table->string('business_partner');
            $table->string('business_partner_name');
            $table->string('estimated_revenue');
            $table->string('budget_amount')->default(0);
            $table->string('estimate_profit')->default(0);
            $table->string('line_amount_po')->default(0);
            $table->string('line_amount_pin')->default(0);
            $table->string('balance_to_utilize')->default(0);
            $table->string('balance_actual')->default(0);
            $table->string('balance_utilize')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pjm');
    }
};
