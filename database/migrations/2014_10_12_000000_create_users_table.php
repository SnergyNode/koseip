<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('who')->nullable(); // from 0 - 4[1=parent, 2 = teacher, 3 = staff, 4 = admin 5 = super admin] 0 = security
            $table->string('unid')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('passport')->nullable();
            $table->string('username')->nullable();
            $table->text('address')->nullable();
            $table->string('position')->nullable();
            $table->boolean('active')->nullable();
            $table->string('password')->nullable();
            $table->text('creator_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->bigInteger('seen_last')->nullable();
            $table->bigInteger('countdown_pass')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
