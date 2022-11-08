<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CodeTableConst as cs;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CategoryTableConst as ct;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(cs::CONST_TABLE_NAME_OF_CODE, function (Blueprint $table) {
            $table->id();
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY);
            $table->string(cm::CONST_COMMON_CLM_NAME_TITLE,cm::CONST_LENGTH_OF_TITLE);
            $table->text(cs::CONST_CLM_NAME_OF_CODE_TABLE_CODE);
            $table->foreignId(ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID);
            $table->unsignedInteger(cm::CONST_COMMON_CLM_NAME_COUNT);
            $table->unsignedInteger(cm::CONST_COMMON_CLM_NAME_IMPORTANCE);
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
        Schema::dropIfExists(cs::CONST_TABLE_NAME_OF_CODE);
    }
};
