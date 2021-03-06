<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1565598735830TasksTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('tasks')) {
            Schema::create('tasks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->longText('description')->nullable();
                $table->unsignedInteger('status_id')->nullable();
                $table->foreign('status_id', 'status_fk_234488')->references('id')->on('task_statuses');
                $table->date('due_date')->nullable();
                $table->unsignedInteger('assigned_to_id')->nullable();
                $table->foreign('assigned_to_id', 'assigned_to_fk_234492')->references('id')->on('users');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
