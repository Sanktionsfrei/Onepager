<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Repositories\CategoryRepositoryContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CategoryRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryRepositoryContract $repositoryContract)
    {
        $categories = $repositoryContract->all();
        return view('dashboard.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CategoryRequest|Request $request
     * @param CategoryRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryRequest $request, CategoryRepositoryContract $repositoryContract)
    {
        $repositoryContract->store($request->all());

        return redirect()->route('dashboard.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $category Category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\CategoryRequest|Request $request
     * @param $category Category
     * @param CategoryRepositoryContract $repositoryContract
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CategoryRequest $request, Category $category, CategoryRepositoryContract $repositoryContract)
    {
        $repositoryContract->updater($category, $request->all());
        
        return redirect()->back(); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('dashboard.categories.index');
    }
}
