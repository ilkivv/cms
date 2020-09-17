<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = ['title', 'preview', 'text', 'count_view', 'is_public'];

    public function getPosts($per_page)
    {
        return $this->paginate($per_page);
    }

    public function updatePost($id, $params)
    {
        return $this->find($id)->update($params);
    }

    public function createPost($params)
    {
        return $this->create($params);
    }
}
