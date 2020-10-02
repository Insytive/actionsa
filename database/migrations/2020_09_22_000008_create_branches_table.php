<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('building')->nullable();
            $table->string('city')->nullable();
            $table->integer('post_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
