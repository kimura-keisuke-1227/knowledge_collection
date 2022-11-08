<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\BinderTableConst as bn;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(bn::CONST_TABLE_NAME_OF_BINDER, function (Blueprint $table) {
            $table->foreignID(cm::CONST_COMMON_CLM_NAME_USER_ID);
            $table->foreignId(bn::CONST_CLM_NAME_OF_BINDER_PARENT_ID);
            $table->foreignId(bn::CONST_CLM_NAME_OF_BINDER_CHILD_ID);
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
        Schema::dropIfExists(bn::CONST_TABLE_NAME_OF_BINDER);
    }
};
