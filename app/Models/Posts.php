<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{

	use SoftDeletes;

    protected $fillable = ['judul','content','id_category', 'post_by','slug_post','gambar','users_id'];
    protected $table = 'posts';
    protected $primaryKey = 'id_post';

    public function category() {
    	return $this->belongsTo(Category::class,'id_category', 'id_category');
    }

    public function tags() {
    	return $this->belongsToMany(Tags::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
