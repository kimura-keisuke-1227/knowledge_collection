<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TaskTableConst as ts;
use App\Classes\Const\DatabaseConst\TaskCommentTableConst as tc;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tc::CONST_TABLE_NAME_OF_TASK_COMMENT, function (Blueprint $table) {
            $table->id();
            $table->foreignId(ts::CONST_FOREIGN_ID_KEY_OF_TASK_ID);
            $table->foreignID(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(tc::CONST_CLM_NAME_OF_TASK_COMMENT_COMMENT);
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
        Schema::dropIfExists(tc::CONST_TABLE_NAME_OF_TASK_COMMENT);
    }
};
