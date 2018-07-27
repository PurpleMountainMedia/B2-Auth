<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('created_by');
            $table->uuid('organisation_id');
            $table->string('name')->nullable()->default(null);
            $table->string('address_line1')->nullable()->default(null);
            $table->string('address_line2')->nullable()->default(null);
            $table->string('address_town')->nullable()->default(null);
            $table->string('address_county')->nullable()->default(null);
            $table->string('address_postcode')->nullable()->default(null);
            $table->string('address_country')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            $table->text('meta')->nullable()->default(null);
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
        Schema::dropIfExists('schools');
    }
}
