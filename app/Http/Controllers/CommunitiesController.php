<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;
use App\Http\Requests\CommunityRequest;

class CommunitiesController extends Controller{

//INDEX
  public function index(){
    $communities = Community::paginate(3);
    return view('public.communities.index')->withCommunities($communities);
  }

  public function create(){
    return view('public.communities.create');
  }

//STORE TO INDEX
  public function store(CommunityRequest $request){
    Community::create([
      'name' => request('name'),
      'slug' => request('slug'),
      'description' => request('description'),
      'max_users' => request('max_users'),
      'genre' => request('genre'),
    ]);

    return redirect('/');
  }

//SHOW COMMUNITIES
  public function show($slug){
    $community = Community::where('slug', $slug)->firstOrFail();
    return view('public.communities.show',['community' => $community]);
  }

//EDIT A COMMUNITY
  public function edit(Community $community){
    return view('public.communities.edit', ['communities' => $community]);
  }

//UPDATE COMMUNITY EDITS
  public function update(CommunityRequest $request, Community $community){
    $community->update([
      'name' => request('name'),
      'slug' => request('slug'),
      'description' => request('description'),
      'max_users' => request('max_users'),
      'genre' => request('genre'),
    ]);
    return redirect('/communities/'.$community->slug);
  }

//DELETE COMMUNITY
  public function destroy(Community $community){
    $community->delete();
    return redirect('/');
  }

}

?>
