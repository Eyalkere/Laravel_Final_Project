<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1565599022785CrmDocumentsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('crm_documents');
    }
}
