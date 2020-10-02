<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_code')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('slack')->nullable();
            $table->string('skype')->nullable();
            $table->string('anydesk')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_fax')->nullable();
            $table->string('employee_status')->nullable();
            $table->string('employment_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
