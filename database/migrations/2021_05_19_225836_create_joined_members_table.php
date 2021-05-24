<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinedMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joined_members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('age');
            $table->string('region');
            $table->string('country');
            $table->string('city');
            $table->string('language');
            $table->string('current_academic_position');
            $table->string('current_academic_institution');
            $table->longText('future_aspirations');
            $table->string('are_you_interested_in_joining_the_board');
            $table->longText('interests_in_gms');
            $table->string('where_did_you_hear_from_us');
            $table->string('questions')->nullable();
            
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
        Schema::dropIfExists('joined_members');
    }
}
