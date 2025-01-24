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
        Schema::table('users', function (Blueprint $table) {
            $table->string('type')->nullable()->after('email_verified_at');
            $table->string('phone_number')->nullable()->after('type');
            $table->string('source')->nullable()->after('remember_token');
            $table->string('filename')->nullable()->after('source');
            $table->text('directory')->nullable()->after('filename');
            $table->text('path')->nullable()->after('directory');
            $table->timestamp('login_at')->nullable()->after('path');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'type',
                'phone_number',
                'source',
                'filename',
                'directory',
                'path',
                'login_at'
            ]);

            $table->dropSoftDeletes();
        });
    }
};
