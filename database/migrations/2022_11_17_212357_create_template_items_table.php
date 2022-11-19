<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterTableConst as tm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;
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
        Schema::create(tm::CONST_TABLE_NAME_OF_TEMPLATE_ITEMS, function (Blueprint $table) {
            $table->id();
            $table->foreignId(tm::CONST_FOREIGN_ID_KEY_OF_TEMPLATE_MASTER_HEADERS_ID);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER);
            $table->string(tm::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_ITEM);
            $table->text(cm::CONST_COMMON_CLM_NAME_EXPLAIN)
                ->nullable();
            $table->foreignId(dv::CONST_VALUE_DIVISION_MASTER_INPUT_TYPE);
            $table->integer(cm::CONST_COMMON_CLM_NAME_DIGIT);
            $table->id();
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
        Schema::dropIfExists(tm::CONST_TABLE_NAME_OF_TEMPLATE_ITEMS);
    }
};
