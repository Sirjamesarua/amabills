<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;


class UserController extends Controller
{
    public function user(Request $request)
    {
    	$user = $request->user();
         return new UserResource($user);
    }

    public function users()
    {
    	$users = User::orderBy('id','DESC')->get();
        return UserResource::collection($users);
        // return new UserResource($user);
    }
}
