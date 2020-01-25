<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('unid')->nullable();
            $table->string('surname_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('passport')->nullable();
            $table->text('address')->nullable();
            $table->text('office')->nullable();
            $table->text('assoc_unid')->nullable();//association
            $table->boolean('active')->nullable();
            $table->string('password')->nullable();
            $table->text('creator_id')->nullable();
            $table->text('state_unid')->nullable();
            $table->text('lga_unid')->nullable();
            $table->bigInteger('countdown_pass')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
