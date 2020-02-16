<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rooms';

    /**
     * Run the migrations.
     * @table rooms
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('niveaus_id');
            $table->string('matricule')->nullable();
            $table->string('codeclasse')->nullable();

            $table->index(["niveaus_id"], 'fk_classes_niveaus1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('niveaus_id', 'fk_classes_niveaus1_idx')
                ->references('id')->on('niveaus')
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
