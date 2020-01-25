<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('lga_id')->nullable();
            $table->string('area_id')->nullable();
            $table->string('assoc_id')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('rider_id')->nullable();
            $table->string('keke_id')->nullable();
            $table->string('note_id')->nullable();
            $table->string('author')->nullable();
            $table->bigInteger('time')->nullable();
            $table->longText('details')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('notes');
    }
}
