<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.index', ['tags'=>Tags::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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
            'name_tag'=>'required|max:20'
        ]);

        $tag = Tags::create([
            'name_tag'=>$request->name_tag,
            'slug_tag' => Str::slug($request->name_tag)
        ]);

        return redirect()->back()->with('success','Success to saving tag');
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
    public function edit(Tags $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tag)
    {
        $this->validate($request, [
            'name_tag' => 'required'
        ]);

        $tag_data = [
            'name_tag' => $request->name_tag,
            'slug_tag' => Str::slug($request->name_tag)
        ];

        Tags::find($id_tag)->update($tag_data);

        return redirect()->route('tags.index')->with('success', 'Update Tag berhasil!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tag)
    {
        $tag = Tags::findorfail($id_tag);
        $tag->delete();

        return redirect()->route('tags.index')->with('success','Tag berhasil dihapus');
    }
}
