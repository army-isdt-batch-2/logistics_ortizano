<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('distribution_id')->index();
            $table->unsignedBigInteger('transportation_id')->index();
            $table->date('date_distributed');
            $table->enum('status', ['delivered', 'returned']);

            $table->foreign('distribution_id')->references('id')->on('distributions');
            $table->foreign('transportation_id')->references('id')->on('transportations');
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
        Schema::dropIfExists('deliveries');
    }
}
