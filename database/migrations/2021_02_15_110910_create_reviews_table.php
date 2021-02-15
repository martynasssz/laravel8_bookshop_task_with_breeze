<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            //review  belong to book
            //foreignId('book_id') means that it creates field book_id and foreign key (relationship) to books table with constrait (means a construction with field id from of books table, it is a plural from with book_id)
            $table->foreignId('book_id')->constraint();
            $table->foreignId('user_id')->constraint(); //the same with user id
            $table->integer('stars')->nullable(); 
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
