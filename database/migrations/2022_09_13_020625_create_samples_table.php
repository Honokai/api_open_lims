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
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('internal_id');
            $table->string('external_id');
            $table->foreignId('customer_id')->references('id')->on('users');
            $table->decimal('value_unit');
            $table->string('unit');
            $table->string('status');
            $table->date('collected_date');
            $table->string('collected_by');
            $table->date('received_date');
            $table->string('received_by');
            $table->text('description');
            $table->date('discarded_date');
            $table->string('discarded_by');
            $table->string('incident_id');
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
        Schema::dropIfExists('samples');
    }
};
