<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;
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
        Schema::create(ts::CONST_TABLE_NAME_OF_TASK, function (Blueprint $table) {
            $table->id();
            $table->foreignId(pr::CONST_FOREIGN_ID_KEY_OF_PROJECT_ID);
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(cm::CONST_COMMON_CLM_NAME_TITLE);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY);
            $table->text(cm::CONST_COMMON_CLM_NAME_DETAIL);
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_STATUS);
            $table->foreignId(dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE);
            $table->foreignId(dv::CONST_VALUE_DIVISION_MASTER_URGENCY);
            $table->date(ts::CONST_CLM_NAME_OF_TASK_TABLE_START_DATE)
            ->nullable();
            $table->date(ts::CONST_CLM_NAME_OF_TASK_TABLE_END_DATE)
            ->nullable();
            $table->date(ts::CONST_CLM_NAME_OF_TASK_TABLE_DEADLINE)
            ->nullable();
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
        Schema::dropIfExists(ts::CONST_TABLE_NAME_OF_TASK);
    }
};
