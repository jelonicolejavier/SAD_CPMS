<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrequirements', function (Blueprint $table) {
            $table->increments('intRequirementsID');
            $table->string('strRequirements', 100)->unique();
            $table->string('strDescription');
            $table->smallInteger('intIdentifier');
            $table->softDeletes();
            $table->boolean('boolFlag')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tblrequirements');
    }
}
