<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1565598886549TaskTaskTagPivotTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('task_task_tag');
    }

    public function down()
    {
        Schema::create('task_task_tag', function (Blueprint $table) {
            $table->unsignedInteger('task_id');
            $table->foreign('task_id', 'task_id_fk_234489')->references('id')->on('tasks');
            $table->unsignedInteger('task_tag_id');
            $table->foreign('task_tag_id', 'task_tag_id_fk_234489')->references('id')->on('task_tags');
        });
    }
}
