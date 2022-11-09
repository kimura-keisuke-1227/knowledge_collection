<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\ProjectTableConst as pr;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(pr::CONST_TABLE_NAME_OF_PROJECT, function (Blueprint $table) {
            $table->id();
            $table->string(pr::CONST_CLM_NAME_OF_PROJECT_TABLE_PROJECT);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER);
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_STATUS);
            $table->date(pr::CONST_CLM_NAME_OF_PROJECT_TABLE_START_DATE);
            $table->date(pr::CONST_CLM_NAME_OF_PROJECT_TABLE_END_DATE);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY);
            $table->text(cm::CONST_COMMON_CLM_NAME_DETAIL);
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
        Schema::dropIfExists(pr::CONST_TABLE_NAME_OF_PROJECT);
    }
};
