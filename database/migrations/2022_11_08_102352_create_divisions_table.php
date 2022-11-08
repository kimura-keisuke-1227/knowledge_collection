<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(dv::CONST_TABLE_NAME_OF_DIVISION, function (Blueprint $table) {
            $table->id();
            $table->string(dv::CONST_CLM_NAME_OF_DIVISION_TABLE_DIVISION);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(dv::CONST_TABLE_NAME_OF_DIVISION);
    }
};
