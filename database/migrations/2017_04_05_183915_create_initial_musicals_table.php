<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInitialMusicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicals', function(Blueprint $table) {
          $table->increments('id');
          $table->string('name')->default('');
          $table->string('address')->default('');
          $table->string('theatre')->default('');
          $table->integer('years')->default(0);
          $table->string('show times');->default('');
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
        Schema::dropifExists('musicals');
    }
}
