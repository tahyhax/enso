<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualCourseFinancialsTable extends Migration
{
    public function up()
    {
        Schema::create('individual_course_financials', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('type')->nullable();
            $table->string('issuer')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('amount')->nullable()->default(0);
            $table->date('payment_date')->nullable();
            $table->integer('remaining_amount')->nullable()->default(0);
            $table->string('invoice_link')->nullable();
            $table->string('payment_link')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('individual_course_financials');
    }
}
