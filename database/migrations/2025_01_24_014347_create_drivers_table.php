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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable()->index();
            $table->string('vehicle_id')->nullable()->index();
            $table->string('model')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->string('source')->nullable();
            $table->string('filename')->nullable();
            $table->text('directory')->nullable();
            $table->text('path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
