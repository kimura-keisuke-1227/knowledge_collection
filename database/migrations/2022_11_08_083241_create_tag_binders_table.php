<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\KnowledgeTableCommon as kn;
use App\Classes\Const\DatabaseConst\TagTableConst as tag;
use App\Classes\Const\DatabaseConst\TagBinderTableConst as tb;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tb::CONST_TABLE_NAME_OF_TAG_BINDERS, function (Blueprint $table) {
            
            $table->foreignID(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->foreignID(kn::CONST_FOREIGN_ID_KEY_OF_KNOWLEDGE_ID);
            $table->foreignID(tag::CONST_FOREIGN_ID_KEY_OF_TAG_ID);

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
        Schema::dropIfExists(tb::CONST_TABLE_NAME_OF_TAG_BINDERS);
    }
};
