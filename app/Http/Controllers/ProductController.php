<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
    	return view('blog.product');
    }

    public function category_fnb()
    {
    	$tags = Posts::paginate(10);

    	$post = DB::table('posts')
    				->leftJoin('posts_tags','posts_tags.posts_id_post','=','posts.id_post')
				    ->leftJoin('tags','tags.id_tag','=','posts_tags.tags_id_tag')
				    ->leftJoin('category','category.id_category','=','posts.id_category')
				    ->where('slug_tag','fnb')
				    ->select('posts.id_post','posts.judul','tags.slug_tag','category.slug')
				    ->get();

		return view('blog.product-fnb', compact('post', 'tags'));
    }

    public function category_retail()
    {
    	$post = DB::table('posts')
    				->leftJoin('posts_tags','posts_tags.posts_id_post','=','posts.id_post')
				    ->leftJoin('tags','tags.id_tag','=','posts_tags.tags_id_tag')
				    ->leftJoin('category','category.id_category','=','posts.id_category')
				    ->where('slug_tag','retail')
				    ->select('posts.id_post','posts.judul','tags.slug_tag','category.slug')
				    ->get();
    	return view('blog.product-retail', compact('post'));
    }
}
