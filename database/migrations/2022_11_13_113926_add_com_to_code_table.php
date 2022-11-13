<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\CommonDatabaseConst as cm;
use App\Classes\Const\DatabaseConst\CodeTableConst as cd;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(cd::CONST_TABLE_NAME_OF_CODE, function (Blueprint $table) {
            $table->text(cm::CONST_COMMON_CLM_NAME_EXPLAIN)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(cd::CONST_TABLE_NAME_OF_CODE, function (Blueprint $table) {
            $table->dropColumn(cm::CONST_COMMON_CLM_NAME_EXPLAIN);
        });
    }
};
