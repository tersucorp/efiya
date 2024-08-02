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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('business_name');
            $table->string('business_type');
            $table->string('tax_id')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('website_url')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->text('description');
            $table->string('services');
            $table->integer('owner_id');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('secondary_phone')->nullable();
            $table->time('opening_hours')->nullable();
            $table->time('closing_hours')->nullable();
            $table->text('delivery_options')->nullable();
            $table->text('return_policy')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('ratings_count')->default(0);
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->text('avatar')->nullable();
            $table->text('banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};
