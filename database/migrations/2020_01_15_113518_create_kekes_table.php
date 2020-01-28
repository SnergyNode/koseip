<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKekesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kekes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('state_unid')->nullable();
            $table->text('lga_unid')->nullable();
            $table->text('area_unid')->nullable();
            $table->text('asst_unid')->nullable();
            $table->text('unid')->nullable();
            $table->string('state_code')->nullable();
            $table->string('lga_code')->nullable();
            $table->string('area_code')->nullable();
            $table->string('assoc_code')->nullable();
            $table->string('plate')->nullable();
            $table->string('keke_id')->nullable();
            $table->string('code')->nullable();
            $table->string('chasis')->nullable();
            $table->string('owner_id')->nullable();
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
        Schema::dropIfExists('kekes');
    }
}
