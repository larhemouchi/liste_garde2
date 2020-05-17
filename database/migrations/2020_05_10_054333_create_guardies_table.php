<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardies', function (Blueprint $table) {
            $table->id();
            //nullable
            $table->string('name')->unique();

            $table->unsignedBigInteger('servuser_id')->index();
            $table->foreign('servuser_id')->references('id')->on('servicy_user')->onDelete('cascade');

            $table->unsignedBigInteger('plage_id')->index();
            $table->foreign('plage_id')->references('id')->on('plages')->onDelete('cascade');

            $table->date('date_start');
            $table->date('date_end');

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
        Schema::dropIfExists('guardies');
    }
}
