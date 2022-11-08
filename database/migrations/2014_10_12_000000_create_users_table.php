<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Classes\Const\DatabaseConst\UserTableConst as us;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(us::CONST_TABLE_NAME_OF_USER, function (Blueprint $table) {
            $table->id();
            $table->string(us::CONST_USER_TABLE_CLM_NAME_OF_NAME);
            $table->string(us::CONST_USER_TABLE_CLM_NAME_OF_EMAIL)
                ->unique();
            $table->timestamp(us::CONST_USER_TABLE_CLM_NAME_OF_EMAIL_VERIFIED_AT)
                ->nullable();
            $table->string(us::CONST_USER_TABLE_CLM_NAME_OF_PASSWORD);
            $table->unsignedInteger(us::CONST_USER_TABLE_CLM_NAME_OF_AUTH)
                ->default(us::CONST_USER_TABLE_DEFAULT_VALUE_OF_NORMAL_USER_AUTH);
            $table->rememberToken();
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
        Schema::dropIfExists(us::CONST_TABLE_NAME_OF_USER);
    }
};
