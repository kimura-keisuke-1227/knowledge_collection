<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\BookmarkTableConst as bm;
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
        Schema::create(bm::CONST_TABLE_NAME_OF_BOOKMARK, function (Blueprint $table) {
            $table->id();
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->boolean(bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_IS_URL)->default(0);
            $table->string(bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_BOOKMARK_URL);
            $table->string(cm::CONST_COMMON_CLM_NAME_TITLE);
            $table->string(cm::CONST_COMMON_CLM_NAME_SUMMARY)->nullable();
            $table->text(bm::CONST_BOOKMARK_TABLE_CLM_NAME_OF_MEMO)->nullable();
            $table->foreignId(ct::CONST_FOREIGN_ID_KEY_OF_CATEGORY_ID)->default(0);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER)->default(0);
            $table->integer(cm::CONST_COMMON_CLM_NAME_IMPORTANCE)->default(0);
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
        Schema::dropIfExists(bm::CONST_TABLE_NAME_OF_BOOKMARK);
    }
};
