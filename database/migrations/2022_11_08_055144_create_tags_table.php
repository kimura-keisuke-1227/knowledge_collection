<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\TagTableConst as tag;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(tag::CONST_CLM_NAME_OF_TAG_TABLE_TAG, function (Blueprint $table) {
            $table->id();
            $table->foreignID(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->string(tag::CONST_CLM_NAME_OF_TAG_TABLE_TAG);
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
        Schema::dropIfExists(tag::CONST_CLM_NAME_OF_TAG_TABLE_TAG);
    }
};
