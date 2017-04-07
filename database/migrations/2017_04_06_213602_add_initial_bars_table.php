<!--Migration of Table for Bars-->

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInitialBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bars', function(Blueprint $table) {
        $table->increments('id');
        $table->string('name')->default('');
        $table->string('address')->default('');
        $table->string('rating')->default('');
        $table->integer('hours')->default(0);
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
      Schema::dropIfExists('bars');
    }
}
