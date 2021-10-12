<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('company_id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->text('role');
            $table->string('type');
            $table->string('position');
            $table->string('preferred_gender');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('education');
            $table->string('min_experience');
            $table->string('max_experience');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('status');
            $table->string('deadline');
           
           
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
        Schema::dropIfExists('jobs');
    }
}
