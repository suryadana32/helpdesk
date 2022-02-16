<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(Posts $posts)
    {
    	$data = $posts->orderBy('created_at','desc')->paginate(3);

    	return view('blog.home', compact('data'));
    }

    public function posts($id)
    {
    	
    }

    public function isi_blog ($slug_post)
    {
        $category = Category::inRandomOrder()->paginate(7);
    	$post = Posts::where('slug_post', $slug_post)->get();
    	return view('blog.isi_blog', compact('post','category'));
    }

    public function category_blog ($slug)
    {
        $judul = $slug;
        $tempek = Category::where('slug',$slug)->get();
        $categories = DB::table('posts')
                        ->leftJoin('category','posts.id_category','=','category.id_category')
                        ->leftJoin('users','posts.users_id','=','users.id')
                        ->where('slug', $slug)
                        ->select('posts.id_post','posts.judul','category.slug', 'posts.content', 'posts.gambar', 'posts.slug_post','users.name')
                        ->get();

        return view('blog.category.category', compact('categories','judul','tempek'));
    }

    public function blog_search(Request $request)
    {
        $judul = 'Hasil Pencarian'.' "'.$request->search.'"';
        $data = Posts::where('judul', $request->search)
                        ->orWhere('judul','like','%'.$request->search.'%')
                        ->orWhere('content','like','%'.$request->search.'%')
                        ->paginate(10);

        return view('blog.category.search', compact('data','judul'));
    }
}
