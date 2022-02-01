<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index',['categories'=>Category::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_category'=> 'required|min:4'
        ]); 

        $category = Category::create([
            'name_category' => $request->name_category,
            'slug' => Str::slug($request->name_category)
        ]);

        return redirect()->back()->with('success','Success to saving category');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_category)
    {
        $this->validate($request, [
            'name_category' => 'required'
        ]);

        $category_data = [
            'name_category' => $request->name_category,
            'slug' => Str::slug($request->name_category)
        ];

        Category::find($id_category)->update($category_data);

        return redirect()->route('category.index')->with('success', 'Update Category berhasil!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_category)
    {
        $category = Category::findorfail($id_category);
        $category->delete();

        return redirect()->route('category.index')->with('success','Category berhasil dihapus');
    }
}
