<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWardsTable extends Migration
{
    public function up()
    {
        Schema::table('wards', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id', 'area_fk_2224275')->references('id')->on('areas');
        });
    }
}
