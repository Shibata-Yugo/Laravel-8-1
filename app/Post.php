<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminatee\Databasee\Eloquente\SoftDeletes;
class Post extends Model
{
    protected $fillable = [
    'title',
    'body',
];

    public function getPaginate(int $limit_count = 5)
    {
     return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
     }
}