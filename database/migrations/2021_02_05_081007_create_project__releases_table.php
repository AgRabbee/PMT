<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project__releases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->text('tasks_list');
            $table->text('files_list');
            $table->unsignedBigInteger('developer_id');
            $table->tinyInteger('dev_release_st');
            $table->dateTime('dev_release_dt');
            $table->tinyInteger('training_release_st');
            $table->dateTime('training_release_dt');
            $table->tinyInteger('live_release_st');
            $table->dateTime('live_release_dt');
            $table->timestamps();

            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('developer_id')
                ->references('id')->on('developers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project__releases');
    }
}
