<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Classes\Const\DatabaseConst\KnowledgeTableCommon as kn;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as cat;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(kn::CONST_TABLE_NAME_OF_KNOWLEDGE, function (Blueprint $table) {
            $table->id();
            $table->foreignID(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->foreignID(cat::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID)
                ->default(cm::CONST_INT_NO_CATEGORY_ID);
            $table->foreignID(kn::CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_PARENT_ID)
                ->default(kn::CONST_VALUE_INT_NO_PARENT_ID);
            $table->string(cm::CONST_COMMON_CLM_NAME_TITLE);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY);
            $table->text(kn::CONST_CLM_NAME_OF_KNOWLEDGE_TABLE_KNOWLEDGE);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER)
                ->default(0);
            $table->integer(cm::CONST_COMMON_CLM_NAME_IMPORTANCE)
                ->default(1);
            $table->integer(cm::CONST_COMMON_CLM_NAME_COUNT)
                ->default(0);
            $table->dateTime(cm::CONST_COMMON_CLM_NAME_FINAL_REFERENCE)
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
        Schema::dropIfExists(kn::CONST_TABLE_NAME_OF_KNOWLEDGE);
    }
};
