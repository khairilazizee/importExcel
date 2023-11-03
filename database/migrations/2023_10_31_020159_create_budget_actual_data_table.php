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
        Schema::create('budget_actual_data', function (Blueprint $table) {
            $table->id();
            $table->string("financial_indicator");
            $table->string("division");
            $table->string("department");
            $table->string("actual_month");
            $table->date("date_uploaded");
            $table->float("mtd");
            $table->float("budget_mtd");
            $table->float("balance");
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('budget_actual_data');
    }
};
