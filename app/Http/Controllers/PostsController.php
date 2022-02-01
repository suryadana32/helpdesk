<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index',['posts'=>Posts::paginate(30)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tags::all();
        return view('admin.posts.create',compact('categories','tags'));
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
            'judul' => 'required|max:50',
            'id_category' => 'required',
            'content' => 'nullable',
            'gambar' => 'required'
        ]);

        //Naming image mengurangi redudansi data
        $gambar = $request->file('gambar');
        $new_gambar = time()."-".$gambar->getClientOriginalName();

        $post = Posts::create([
            'judul' => $request->judul,
            'id_category' => $request->id_category,
            'content' => $request->content,
            'gambar' => 'storage/upload/posts/'.$new_gambar,
            'slug_post' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('storage/upload/posts', $new_gambar);
        return redirect()->back()->with('success','Post berhasil disimpan');

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
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|max:50',
            'id_category' => 'required',
            'content' => 'nullable',
        ]);

        
        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $new_gambar = time()."-".$gambar->getClientOriginalName();
            $gambar->move('storage/upload/posts', $new_gambar);

        $post_data = [
            'judul' => $request->judul,
            'id_category' => $request->id_category,
            'content' => $request->content,
            'gambar' => 'storage/upload/posts/'.$new_gambar,
            'slug_post' => Str::slug($request->judul)
        ];
        } else {

        $post_data = [
            'judul' => $request->judul,
            'id_category' => $request->id_category,
            'content' => $request->content,
            'slug_post' => Str::slug($request->judul)
        ];
        }

        $post->tags()->sync($request->tags);
        $post->update($post_data);
        
        return redirect()->route('posts.index')->with('success','Post berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);

        $post->delete();
        return redirect()->back()->with('success','Berhasil di hapus, Silahkan cek Thrash');
    }

    public function post_deleted() 
    {
        $posts = Posts::onlyTrashed()->paginate(30);
        return view('admin.posts.deleted', compact('posts'));
    }

    public function restore ($id_post)
    {
        $posts = Posts::withTrashed()->where('id_post', $id_post)->first();
        $posts->restore();

        return redirect()->back()->with('success', 'Post Berhasil direstore');
    }


    public function terminate($id_post)
    {
        $posts = Posts::withTrashed()->where('id_post', $id_post)->first();
        $posts->forceDelete();

        return redirect()->back()->with('success', 'Post Berhasil Di Hapus Mermanen');
    }

    public function search(Request $request)
    {
        $data = Posts::where('judul', $request->search)->orWhere('judul','like','%'.$request->search.'%')->paginate(10);
        return view('admin.posts.result', compact('data'));
    }
}
