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
        Schema::create('user_events', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("event_id");

            $table->index("user_id", "user_event_user_idx");
            $table->index("event_id", "event_user_user_idx");

            $table->foreign("user_id", "user_cafe_user_fk")->on("users")->references("id");
            $table->foreign("event_id", "event_user_user_fk")->on("events")->references("id");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_events');
    }
};
