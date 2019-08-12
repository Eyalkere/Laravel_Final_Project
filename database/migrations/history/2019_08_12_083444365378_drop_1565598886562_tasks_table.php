<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1565598886562TasksTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tasks');
    }
}
