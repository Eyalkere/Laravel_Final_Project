<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1565598887267TaskManagementsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('task_managements');
    }
}
