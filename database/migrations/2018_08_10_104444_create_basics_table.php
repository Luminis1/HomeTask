<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uniqueListingTitle')->unique();
            $table->string('typeOfRetrea_id');
            $table->integer('languageOfTeaching_id')->nullable()->unsigned();
            $table->integer('CountryOfDestination_id')->nullable()->unsigned();
            $table->integer('duration');
            $table->string('shortSummary');
            $table->string('videoLink');
            $table->string('retreatFor')->nullable()->unsigned();
        });
//        DB::statement('ALTER TABLE basics CHANGE languageOfTeaching_id languageOfTeaching_id INT(2) UNSIGNED ZEROFILL NOT NULL');
//        DB::statement('ALTER TABLE basics CHANGE CountryOfDestination_id CountryOfDestination_id INT(2) UNSIGNED ZEROFILL NOT NULL');
//


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('basics');
    }
}
