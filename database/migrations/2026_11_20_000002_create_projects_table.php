<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->integer('id', true);
            $table->integer('client_id');
            $table->string('judul', 200);
            $table->text('deskripsi');
            $table->string('kategori', 50);
            $table->bigInteger('budget_min')->default(0);
            $table->bigInteger('budget_max')->default(0);
            $table->date('batas_lelang');
            $table->enum('status', ['terbuka', 'ditutup'])->default('terbuka');
            $table->timestamp('created_at')->useCurrent();
            $table->index('status', 'idx_projects_status');
            $table->index('client_id', 'idx_projects_client');
            $table->foreign('client_id', 'fk_projects_client')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
        DB::statement(
            'ALTER TABLE projects ADD CONSTRAINT chk_projects_budget '
            . 'CHECK (budget_min >= 0 AND budget_max >= budget_min)'
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
