<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inv_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('people_number');
            $table->foreign('inv_id')->references('id')->on('invitations')->onDelete('cascade'); 
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
        Schema::dropIfExists('invitation_users');
    }
}
