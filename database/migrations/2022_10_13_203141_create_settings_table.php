<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('logo');
            $table->string('hero_slogan');
            $table->string('hero_desc');
            $table->string('hero_image');
            $table->json('clients');
            $table->string('aboutus_title');
            $table->text('aboutus_desc_html');
            $table->string('phone');
            $table->string('address');
            $table->string('social');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
