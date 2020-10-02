<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('lead_email')->nullable();
            $table->string('address')->nullable();
            $table->string('building')->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('first_time_voter')->nullable();
            $table->string('lead_status')->nullable();
            $table->string('interest')->nullable();
            $table->string('id_number')->unique();
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
