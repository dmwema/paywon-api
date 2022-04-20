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
        Schema::create('transferts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->double('amount_from');
            $table->double('amount_to');
            $table->string('currency_from');
            $table->string('currency_to');
            $table->date('transfert_date');
            $table->foreignId('commission_transact');
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
        Schema::dropIfExists('tansferts');
    }
};
