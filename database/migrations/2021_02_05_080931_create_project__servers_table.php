<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project__servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('server_id');
            $table->string('ip');
            $table->integer('port');
            $table->string('path');
            $table->string('url');
            $table->text('web_login_cred');
            $table->text('file_access_cred');
            $table->text('vpn_cred');
            $table->timestamps();

            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('server_id')
                ->references('id')->on('servers')
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
        Schema::dropIfExists('project__servers');
    }
}
