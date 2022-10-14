<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('category');
            $table->string('short_desc');
            $table->text('desc')->nullable();
            $table->string('thumbnail');
            $table->string('intro')->default(0);
            $table->integer('price');
            $table->integer('old_price')->default(0);
            $table->string('level')->nullable();
            $table->string('duration')->nullable();
            $table->integer('classes')->default(0);
            $table->integer('lessions')->default(0);
            $table->integer('quizzes')->default(0);
            $table->integer('passing')->default(0);
            $table->string('certificate')->nullable();
            $table->string('language')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
