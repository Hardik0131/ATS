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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained()->cascadeOnDelete();
            $table->text('applicant_name');
            $table->text('slug')->unique();
            $table->text('applicant_email');
            $table->string('mobile_number')->nullable();
            $table->text('current_location')->nullable();
            $table->text('portfolio_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('resume_path')->nullable();
            $table->text('cover_letter')->nullable();
            $table->integer('resume_score')->default(0);
            $table->enum('status', ['pending', 'reviewed', 'rejected', 'accepted'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
