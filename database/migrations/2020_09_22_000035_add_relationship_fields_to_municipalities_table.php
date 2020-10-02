<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMunicipalitiesTable extends Migration
{
    public function up()
    {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id', 'province_fk_2224263')->references('id')->on('provinces');
        });
    }
}
