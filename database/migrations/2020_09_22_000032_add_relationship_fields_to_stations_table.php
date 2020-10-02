<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStationsTable extends Migration
{
    public function up()
    {
        Schema::table('stations', function (Blueprint $table) {
            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id', 'ward_fk_2224292')->references('id')->on('wards');
        });
    }
}
