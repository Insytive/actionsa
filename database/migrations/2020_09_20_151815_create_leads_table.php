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
            $table->string('id_number', 255)->unique();
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('lead_email', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('building', 255)->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('first_time_voter')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
            $table->boolean('is_member')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
