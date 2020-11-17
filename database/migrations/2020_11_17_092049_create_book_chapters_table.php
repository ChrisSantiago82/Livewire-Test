<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('book_chapters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('book_id')->index();
            $table->string('chapter');
            $table->timestamps();
        });

        $bookSeeder = new \Database\Seeders\BookSeeder();
        $bookSeeder->run();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_chapters');
    }
}
