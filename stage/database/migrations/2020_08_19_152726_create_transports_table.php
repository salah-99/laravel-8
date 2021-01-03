<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->string('matricule',20);
            $table->string('firstNameCond',20);
            $table->string('lastNameCond',20);
            $table->datetime('dateEntre');
            $table->datetime('dateSortie');
            $table->double('quantite');
            


            
        });
        DB::statement("ALTER TABLE transports ADD CONSTRAINT dateEN CHECK (dateEntre<dateSortie);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
}
