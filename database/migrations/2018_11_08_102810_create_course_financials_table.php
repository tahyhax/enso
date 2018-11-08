<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseFinancialsTable extends Migration
{
    public function up()
    {
        Schema::create('course_financials', function (Blueprint $table) {
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
        Schema::dropIfExists('course_financials');
    }
}
