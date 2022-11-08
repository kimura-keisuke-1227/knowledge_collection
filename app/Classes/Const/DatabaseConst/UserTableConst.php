<?php

namespace app\Classes\Const\DatabaseConst;

class UserTableConst
{
    const CONST_TABLE_NAME_OF_USER = 'users';

    const CONST_FOREIGN_ID_KEY_OF__ID = 'user_id';
    
    const CONST_USER_TABLE_CLM_NAME_OF_EMAIL = 'email';
    const CONST_USER_TABLE_CLM_NAME_OF_EMAIL_VERIFIED_AT = 'email_verified_at';
    
    const CONST_USER_TABLE_CLM_NAME_OF_NAME = 'name';
    const CONST_USER_TABLE_CLM_NAME_OF_PASSWORD = 'password';
    const CONST_USER_TABLE_CLM_NAME_OF_PASSWORD_CONFIRM = 'password_confirmation';

    const CONST_USER_TABLE_CLM_NAME_OF_AUTH = 'auth';
    const CONST_USER_TABLE_DEFAULT_VALUE_OF_NORMAL_USER_AUTH = 0;
}