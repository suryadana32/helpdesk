<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name_category','slug'];
   	protected $table = 'category';
   	protected $primaryKey = 'id_category';

}
