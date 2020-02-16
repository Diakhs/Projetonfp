<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cours';

    /**
     * Run the migrations.
     * @table cours
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('salles_id');
            $table->unsignedBigInteger('matieres_id');
            $table->unsignedBigInteger('administrateurs_id');
            $table->unsignedBigInteger('rooms_id');
            $table->unsignedBigInteger('professeurs_id')->nullable();
            $table->string('jour')->nullable();
            $table->time('heuredebut')->nullable();
            $table->time('heurefin')->nullable();
            $table->string('semestre')->nullable();

            $table->index(["professeurs_id"], 'fk_cours_professeurs1_idx');

            $table->index(["salles_id"], 'fk_cours_salles1_idx');

            $table->index(["administrateurs_id"], 'fk_cours_administrateurs1_idx');

            $table->index(["matieres_id"], 'fk_cours_matieres1_idx');

            $table->index(["rooms_id"], 'fk_cours_rooms1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('salles_id', 'fk_cours_salles1_idx')
                ->references('id')->on('salles')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('matieres_id', 'fk_cours_matieres1_idx')
                ->references('id')->on('matieres')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('administrateurs_id', 'fk_cours_administrateurs1_idx')
                ->references('id')->on('administrateurs')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('professeurs_id', 'fk_cours_professeurs1_idx')
                ->references('id')->on('professeurs')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('rooms_id', 'fk_cours_rooms1_idx')
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
