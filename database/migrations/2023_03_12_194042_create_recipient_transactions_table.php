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
        Schema::create('recipient_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->bigInteger('account_id')->nullable()->unsigned();
            $table->bigInteger('recipient_id')->nullable()->unsigned();
            $table->string('amount')->nullable();
            $table->string('transaction_category')->nullable();
            $table->integer('new_balance')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('user_accounts')->onDelete('cascade');
            $table->foreign('recipient_id')->references('id')->on('user_recipients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipient_transactions');
    }
};
