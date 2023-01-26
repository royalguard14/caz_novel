<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusDeveloperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutus_developer', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable(null);
            $table->text('name');
            $table->text('position');
            $table->text('socmed');
            $table->timestamps();
        });

         Schema::create('aboutus_contact', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable(null);
            $table->text('type');
            $table->text('details');
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
        Schema::dropIfExists('aboutus_developer');
    }
}
