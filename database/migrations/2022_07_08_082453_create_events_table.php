<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("location_id");
            $table->foreignId("category_id")->nullable();
            $table->string("title_cz")->nullable();
            $table->string("title_en")->nullable();
            $table->date("start_date");
            $table->date("end_date")->nullable();
            $table->time("time")->format('H:i')->nullable();
            $table->boolean("is_paid");
            $table->integer("price")->nullable();
            $table->integer("capacity")->nullable();
            $table->integer("already_registered")->nullable();
            $table->string("qr_code_image")->nullable();
            $table->text("description_cz")->nullable();
            $table->text("description_en")->nullable();
            $table->text("instructions_cz")->nullable();
            $table->text("instructions_en")->nullable();
            $table->boolean("is_phone_required");
            $table->boolean("is_recurring")->nullable();
            $table->boolean("is_active");
            $table->boolean("is_featured");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
