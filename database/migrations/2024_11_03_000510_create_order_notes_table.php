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
        // Schema::create('order_notes', function (Blueprint $table) {
        //     $table->id();
        //     $table->text('note_message');
        //     $table->string('type');
        //     $table->foreignId('user_id')->constrained()->onDelete('cascade');
        //     $table->foreignId('order_id')->nullable()->constrained()->onDelete('cascade');
        //     $table->foreignId('custom_order_id')->nullable()->constrained()->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_notes');
    }
};
