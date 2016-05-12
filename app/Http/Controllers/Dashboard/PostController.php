<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Repositories\PostRepositoryContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param PostRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepositoryContract $repositoryContract)
    {
        $posts = $repositoryContract->paginate(10);
        
        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\PostRequest|Request $request
     * @param PostRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request, PostRepositoryContract $repositoryContract)
    {
        $post = $repositoryContract->store($request->all());
        
        return redirect()->route('dashboard.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $post Post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        return view('dashboard.posts.edit', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest|Request $request
     * @param Post $post
     * @param PostRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post, PostRepositoryContract $repositoryContract)
    {
        $repositoryContract->update($post, $request->all());
        
        return redirect()->back();        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $post Post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post->delete();
        return redirect()->route('dashboard.posts.index');
    }
}
