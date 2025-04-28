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
        Schema::create('ticket_assignees', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('active')->default(false);

            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign('tickets_assignee_id_foreign');
            $table->dropColumn('assignee_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_assignees');

        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('assignee_id')->nullable();
        });
    }
};
