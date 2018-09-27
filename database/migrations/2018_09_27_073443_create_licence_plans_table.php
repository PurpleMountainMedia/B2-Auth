<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicencePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licence_plans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable()->default(null);
            $table->integer('length_days');
            $table->integer('payment_every_days');
            $table->integer('cost');
            $table->integer('pupils_min');
            $table->integer('pupils_max');
            $table->integer('schools_min');
            $table->integer('schools_max');
            $table->uuid('school_id')->nullable()->default(null);
            $table->string('organisation_type')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licence_plans');
    }
}
