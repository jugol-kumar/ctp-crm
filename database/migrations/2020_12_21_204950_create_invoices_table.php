<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quotation_id');
            $table->unsignedInteger('sub_total');
            $table->unsignedInteger('grand_total');
            $table->unsignedInteger('qtn')->default(1);
            $table->unsignedInteger('discount')->default(0);
            // $table->unsignedInteger('pay')->default(0);
            // $table->unsignedInteger('due')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('invoices');
    }
}
