<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersCommunitiesController extends Controller{

  public function index($userSlug){
    $user = User::where('slug', $userSlug)->firstOrFail();
    $communities = $user->communities()->paginate(1);

    return view('public.userCommunity.index',[
      'user' => $user,
      'communities' => $communities;
    ]);
  }

}
