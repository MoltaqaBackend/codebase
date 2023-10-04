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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('transaction_reasons')->nullable();
            $table->string('transaction_type')->default('initial_value');
            $table->double('current')->default(0);
            $table->double('steps')->nullable()->default(0);
            $table->double('balance')->default(0);
            $table->json('data')->nullable();
            $table->nullableMorphs('wallettable');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
