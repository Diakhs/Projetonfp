<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'inscriptions';

    /**
     * Run the migrations.
     * @table inscriptions
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->date('anneescolaire')->nullable();
            $table->unsignedBigInteger('ecoliers_id');
            $table->unsignedBigInteger('rooms_id');

            $table->index(["ecoliers_id"], 'fk_inscriptions_ecoliers1_idx');

            $table->index(["rooms_id"], 'fk_inscriptions_rooms1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('ecoliers_id', 'fk_inscriptions_ecoliers1_idx')
                ->references('id')->on('ecoliers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('rooms_id', 'fk_inscriptions_rooms1_idx')
                ->references('id')->on('rooms')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
