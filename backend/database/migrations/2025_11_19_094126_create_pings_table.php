<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->tinyInteger('battery_percent')->unsigned();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pings');
    }
};
