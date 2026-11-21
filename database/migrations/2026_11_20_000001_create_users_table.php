<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->integer('id', true);               // INT AUTO_INCREMENT PRIMARY KEY (bertanda, sama seperti SQL asli)
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('password', 255);
            $table->enum('role', ['klien', 'developer', 'admin'])->default('klien');
            $table->timestamp('created_at')->useCurrent();   // hanya created_at, tanpa updated_at

            $table->unique('email', 'uq_users_email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
