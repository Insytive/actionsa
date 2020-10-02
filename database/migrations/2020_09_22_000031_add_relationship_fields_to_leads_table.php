<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeadsTable extends Migration
{
    public function up()
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->unsignedBigInteger('province_id')->nullable();
            $table->foreign('province_id', 'province_fk_2224436')->references('id')->on('provinces');
            $table->unsignedBigInteger('station_id');
            $table->foreign('station_id', 'station_fk_2224437')->references('id')->on('stations');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by', 'created_by_fk_2224440')->references('id')->on('users');
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id', 'referrer_id_fk_2224441')->references('id')->on('users');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_2239858')->references('id')->on('users');
            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id', 'member_fk_2239859')->references('id')->on('members');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_2239930')->references('id')->on('employees');
            $table->unsignedBigInteger('volunteer_id')->nullable();
            $table->foreign('volunteer_id', 'volunteer_fk_2240112')->references('id')->on('volunteers');
        });
    }
}
