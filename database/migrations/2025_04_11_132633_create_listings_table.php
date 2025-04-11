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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('listing_types','id');
            $table->foreignUuid('user_id')->constrained('users','id');
            $table->foreignId('province_id')->constrained('provinces','id');
            $table->foreignId('regency_id')->constrained('regencies','id');
            $table->foreignId('subdistrict_id')->constrained('subdistricts','id');
            $table->string('meta_description',255)->nullable();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->enum('status',['published','draft']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
