<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longtext('description');
            $table->enum('category', ['1', '2']);
            $table->unsignedBiginteger('supplier_id')->index();
            $table->unsignedBiginteger('storage_id')->index();
            $table->integer('total_stocks');

            $table->foreign('supplier_id')->references('id')->on('supplier');
            $table->foreign('storage_id')->references('id')->on('storage');
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
        Schema::dropIfExists('assets');
    }
}
