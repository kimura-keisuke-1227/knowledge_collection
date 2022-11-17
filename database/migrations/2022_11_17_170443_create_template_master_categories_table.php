<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TemplateMasterCategoryTableConst as tmc;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tmc::CONST_TABLE_NAME_OF_TEMPLATE_MASTER_CATEGORY, function (Blueprint $table) {
            $table->id();
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(tmc::CONST_CLM_NAME_OF_CATEGORY_TABLE_TEMPLATE_MASTER_CATEGORY);
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
        Schema::dropIfExists(tmc::CONST_TABLE_NAME_OF_TEMPLATE_MASTER_CATEGORY);
    }
};
