<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('transactionable');
            $table->text('pay_id')->nullable();
            $table->double('amount')->nullable();
            $table->boolean('status')->nullable();
            $table->json('data')->nullable();
            $table->json('pay_data')->nullable();
            $table->datetime('paid_at')->nullable();
            $table->string('transaction_reasons')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
