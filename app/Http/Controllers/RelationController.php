<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function profile()
    {
        // $user = User::find(1);
        //this is used to pring the profile that connected to the user but we gonna use one better
        // $profile = Profile::where('user_id', $user->id)->first();
        //so here we estaplish the relationship in the user model
        //and we can use the profile method to get the profile of the user
        //
        $profile = Profile::find(1);
        dd($profile->user);
    }
}
