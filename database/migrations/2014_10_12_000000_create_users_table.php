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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('phone');
            $table->string('address');
            $table->string('nik')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('swafoto');
            $table->string('ktp');
            $table->integer('is_active')->default(2)->comment('2 = nonaktif, 1 = aktif');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
