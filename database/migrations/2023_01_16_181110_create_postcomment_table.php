<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcomment', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id')->nullable(0);
            $table->text('image')->nullable();
            $table->text('name');
            $table->text('message');
            $table->text('message_reply')->nullable();
            $table->integer('reply')->nullable(0);
            $table->text('status')->nullable(0);
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
        Schema::dropIfExists('postcomment');
    }
}
