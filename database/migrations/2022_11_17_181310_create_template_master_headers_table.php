<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;
use App\Classes\Const\DatabaseConst\DivisionTableConst as dv;
use App\Classes\Util\Util as ut;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tm::CONST_TABLE_NAME_OF_TEMPLATE_MASTER_HEADERS, function (Blueprint $table) {
            $table->id();
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_HEADER);
            $table->foreignId(tmc::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_CATEGORY_ID)
                ->default(0);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY)
                ->nullable();
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER)
                ->default(cm::CONST_INT_NO_ORDER_DIRECTED);
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_IMPORTANCE)
                ->default(ut::getDivisionIdFromDivisionCodeAndDivisionValue(
                    dv::CONST_VALUE_DIVISION_MASTER_CODE_IMPORTANCE,
                    dv::CONST_VALUE_OF_IMPORTANCE_NORMAL));
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
        Schema::dropIfExists(tm::CONST_TABLE_NAME_OF_TEMPLATE_MASTER_HEADERS);
    }
};
