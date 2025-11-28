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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->timestamp('reservation_date')->useCurrent();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('number_of_adults')->default(1);
            $table->integer('number_of_children')->default(0);
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->enum('reservation_status',
            ['Confirmed','CheckedIn','CheckedOut','Cancelled','NoShow'])->default('Confirmed');
            $table->text('special_requests')->nullable();
            $table->foreignId('created_by_employee_id')->nullable()->constrained('employees')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
