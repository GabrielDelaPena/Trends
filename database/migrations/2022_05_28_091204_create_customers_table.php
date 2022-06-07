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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('famillienaam');
            $table->string('geboorte_datum');
            $table->string('email');
            $table->string('adres');
            $table->integer('huis_nr');
            $table->integer('app_nr');
            $table->string('postcode');
            $table->string('ticket');
            $table->string('voucher');
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
        Schema::dropIfExists('customers');
    }
};
