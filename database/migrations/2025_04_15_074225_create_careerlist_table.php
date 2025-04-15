<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careerlist', function (Blueprint $table) {
            $table->id();
            $table->string('title_career');
            $table->text('description_career');
            $table->string('company_name');
            $table->string('location');
            $table->string('category');
            $table->string('job_type');
            $table->string('requirements');
            $table->string('responsibilities');
            $table->dateTime('deadline');
            $table->string('link');
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
        Schema::dropIfExists('careerlist');
    }
}
