<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Classes\Const\DatabaseConst\CategoryTableConst as cat;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(cat::CONST_TABLE_NAME_OF_CATEGORY, function (Blueprint $table) {
            $table->id();
            $table->foreignId(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->integer(cm::CONST_COMMON_CLM_NAME_ORDER);
            $table->string(cat::CONST_CLM_NAME_OF_CATEGORY_TABLE_CATEGORY);
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
        Schema::dropIfExists(cat::CONST_TABLE_NAME_OF_CATEGORY);
    }
};
