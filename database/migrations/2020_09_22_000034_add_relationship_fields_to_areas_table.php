<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAreasTable extends Migration
{
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->unsignedBigInteger('municipality_id')->nullable();
            $table->foreign('municipality_id', 'municipality_fk_2224269')->references('id')->on('municipalities');
        });
    }
}
