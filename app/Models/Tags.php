<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name_tag','slug_tag'];
   	protected $table = 'tags';
   	protected $primaryKey = 'id_tag';

   	public function post() {
   		return $this>belongsToMany(Tags::class);
   	}
}
