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
        Schema::create('sub_samples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sample_id')->references('id')->on('samples');
            $table->string('value_unit');
            $table->string('unit');
            $table->string('status');
            $table->date('received_date');
            $table->string('received_by');
            $table->text('description');
            $table->string('incident_id');
            $table->string('requests_id');
            $table->string('storage_id');
            $table->string('created_by');
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
        Schema::dropIfExists('sub_samples');
    }
};
