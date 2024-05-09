<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Author;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_author', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->costrained()->cascadeOoDelete();
            $table->foreignIdFor(Author::class)->costrained()->cascadeOoDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_author');
    }
};
