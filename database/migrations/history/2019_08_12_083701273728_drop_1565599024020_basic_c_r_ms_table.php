<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1565599024020BasicCRMsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('basic_c_r_ms');
    }
}
