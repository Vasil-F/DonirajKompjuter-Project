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
            $table->string('name');
            $table->string('surname');
            $table->string('city');
            $table->string('email');
            $table->integer('phone');
            $table->string('computer');
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('comment')->nullable();
            $table->string('status')->default('New');
            $table->string('archived')->nullable();
            $table->boolean('has_donation')->default(false);
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
