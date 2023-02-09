<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myadresstables', function (Blueprint $table) {
            $table->string('tnumber',);
            $table->text('subscribername');
            $table->string('dob');
            $table->string('fatherhusname');
            $table->text('localaddress');
            $table->text('permanantaddress');
            $table->string('alternative');
            $table->string('emai');
            $table->string('gender');
            $table->string('nationality');
            $table->string('addressproff');
            $table->string('connectiontype');
            $table->string('imsi');
            $table->string('serviceprovider');
            $table->string('status');
            $table->string('activationdate');
            $table->text('ad1');
            $table->text('ad2');
            $table->text('ad3');
            $table->text('ad4');
            $table->text('ad5');
            $table->text('aadhaar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myadresstables');
    }
};
