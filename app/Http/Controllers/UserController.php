<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

use app\Classes\Const\DatabaseConst\UserTableConst as us;

use Illuminate\Support\Facades\Log;
use App\Classes\Util\Util;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        Log::info(__METHOD__ . '(' . __LINE__ . ') start by user(' . Util::getUserId() . ')');

        $validated = $request->validated();
        Log::debug(__METHOD__ . '(' . __LINE__ . ') $validated:');

        $validated[us::CONST_USER_TABLE_CLM_NAME_OF_PASSWORD]
            = Hash::make($validated[us::CONST_USER_TABLE_CLM_NAME_OF_PASSWORD]);

        Log::debug($validated);
        $user=User::create($validated);
        Log::notice(__METHOD__ . '(' . __LINE__ . ') created user('. $user->id .') email:' . $validated[us::CONST_USER_TABLE_CLM_NAME_OF_EMAIL]  );
        Log::info(__METHOD__ . '(' . __LINE__ . ') end by user(' . Util::getUserId() . ')');
        return redirect(Route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
