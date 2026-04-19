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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('job_title');
            $table->text('slug')->unique();
            $table->text('company_name')->nullable();
            $table->string('department')->nullable();
            $table->string('location')->nullable();
            $table->string('work_type');
            $table->string('employment_type');
            $table->string('experience_level');
            $table->integer('min_experience_in_years')->nullable();
            $table->string('hiring_urgency');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->string('salary_currency');
            $table->json('skills');
            $table->text('responsibilities');
            $table->text('role_summary');
            $table->text('job_description');
            $table->timestamp('closing_date');
            $table->enum('status', ['draft', 'active', 'closed'])->default('draft');
            $table->bigInteger('views')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
