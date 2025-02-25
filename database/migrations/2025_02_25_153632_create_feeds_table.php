<?php

use App\Models\Publisher;
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
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Publisher::class);
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('record_name');
            $table->string('display_name');
            $table->text('description')->nullable();
            $table->string('avatar_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feeds', function (Blueprint $table) {
            $table->dropForeignIdFor(Publisher::class);
        });

        Schema::dropIfExists('feeds');
    }
};
