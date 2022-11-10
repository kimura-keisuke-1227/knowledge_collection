<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;

use App\Classes\Util\Util;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(ts::CONST_TABLE_NAME_OF_TASK, function (Blueprint $table) {
            $table->foreignId(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE)
            ->after(cm::CONST_COMMON_CLM_NAME_STATUS)
            ->default(
                Util::getDivisionIdFromDivisionCodeAndDivisionValue(
                dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
                dv::CONST_VALUE_OF_IMPORTANCE_NORMAL));
            /*
            ->default(
                    Util::getDivisionIdFromDivisionCodeAndDivisionValue(
                    dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
                    dv::CONST_TEXT_OF_IMPORTANCE_NORMAL)
                );
                */
            $table->foreignId(dv::CONST_VALUE_DIVISION_MASTER_URGENCY)
            ->after(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE)
            ->default(
                Util::getDivisionIdFromDivisionCodeAndDivisionValue(
                dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                dv::CONST_VALUE_OF_URGENCY_NORMAL));
            /*
            ->default(
                Util::getDivisionIdFromDivisionCodeAndDivisionValue(
                dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                dv::CONST_TEXT_OF_URGENCY_NORMAL)
            );
            */
        });

        Util::getDivisionIdFromDivisionCodeAndDivisionValue(
            dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
            dv::CONST_VALUE_OF_IMPORTANCE_NORMAL);
        
            Util::getDivisionIdFromDivisionCodeAndDivisionValue(
                dv::CONST_VALUE_DIVISION_MASTER_URGENCY,
                dv::CONST_VALUE_OF_URGENCY_NORMAL);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(ts::CONST_TABLE_NAME_OF_TASK, function (Blueprint $table) {
            $table->dropColumn(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);
            $table->dropColumn(dv::CONST_VALUE_DIVISION_MASTER_URGENCY);
        });
    }
};
