<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unsigned();
            $table->integer('id_author')->unsigned();
            $table->integer('id_publisher')->unsigned();
            $table->integer('id_book_case')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('id_category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('id_author')
                ->references('id')
                ->on('authors')
                ->onDelete('cascade');

            $table->foreign('id_publisher')
                ->references('id')
                ->on('publishers')
                ->onDelete('cascade');

            $table->foreign('id_book_case')
                ->references('id')
                ->on('book_cases')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
