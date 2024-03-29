<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->string('sales_manager_name')->nullable();
            $table->string('manager_name')->nullable();
            $table->longText('about_description')->nullable();
            $table->longText('team_title')->nullable();
            $table->string('about_picture')->nullable();
            $table->string('sales_manager_picture')->nullable();
            $table->string('manager_picture')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
