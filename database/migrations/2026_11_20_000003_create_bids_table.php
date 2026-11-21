<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->integer('id', true);
            $table->integer('project_id');
            $table->integer('developer_id');
            $table->bigInteger('harga');
            $table->integer('durasi');
            $table->text('proposal');
            $table->tinyInteger('is_winner')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->unique(['project_id', 'developer_id'], 'uq_bids_project_developer');
            $table->foreign('project_id', 'fk_bids_project')
                ->references('id')->on('projects')
                ->onDelete('cascade');
            $table->foreign('developer_id', 'fk_bids_developer')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
        DB::statement(
            'ALTER TABLE bids ADD CONSTRAINT chk_bids_nilai CHECK (harga > 0 AND durasi > 0)'
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
