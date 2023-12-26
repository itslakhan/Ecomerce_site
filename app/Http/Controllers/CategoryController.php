<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories= Category::where('status','1')->get();
        return view('admin.index',compact('categories'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('category_id')->get();
        return view('admin.addcategory', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
        ];
    
        $create = Category::create($data);
        return redirect()->route('addcategory');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string  $id)
    {
        $categories = Category::whereNull('category_id')->get();
        $category= Category::find($id);
        return view('admin.editcategory', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
        ];
        $category= Category::find($id);
        $category->update($data);
        return redirect()->route('category_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           $category= Category::find($id);
           $category->delete();
           return  back();
    }
}
