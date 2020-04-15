<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('path', function (Blueprint $table) {
            $table->string('tag',80);
            $table->primary('tag');
            $table->unique('tag');
            $table->string('path',200);
            $table->string('query',600);
            $table->integer('port')->default(80);
            $table->dateTime('destroy_on')->nullable();
        });
        Schema::dropIfExists('users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('path');
    }
}
