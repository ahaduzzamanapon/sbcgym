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
        Schema::create('purchase_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('purchase_purchase_id')->nullable();
            $table->string('payment_mode')->nullable();
            $table->date('payment_date')->nullable();
            $table->decimal('payment_amount', 10, 2)->nullable();
            $table->text('payment_note')->nullable();
            $table->string('payment_doc')->nullable();
            $table->text('payment_number')->nullable();
            $table->integer('payment_status')->default(1);
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
        Schema::dropIfExists('purchase_payments');
    }
};
