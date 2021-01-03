    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateConteneursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteneurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('quantite')->default(0);
            
            
        });
        DB::statement("ALTER TABLE conteneurs ADD CONSTRAINT chk_quantity CHECK (quantite<=3000.00);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conteneurs');
    }
}
