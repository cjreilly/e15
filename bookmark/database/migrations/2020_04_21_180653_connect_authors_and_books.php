<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectAuthorsAndBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            # Remove the field associated with the old way we were storing authors
            # Can do this here, or update the original migration that creates the `books` table
#            $table->dropColumn('author');
            #
            # Add a new bigint field called `author_id`
            # has to be unsigned and nullable
            $table->bigInteger('author_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('books_author_id_foreign');

        $table->dropColumn('author_id');
    }
}
