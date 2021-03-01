<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLifestylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lifestyles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->longText('about')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('mother_lang')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('physical_status')->nullable();
            $table->string('education')->nullable();
            $table->string('ocupation')->nullable();
            $table->string('anual_income')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_ocupation')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('lifestyles');
    }
}
