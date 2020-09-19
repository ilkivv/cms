<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class PostController extends Controller
{
    public function getPosts(Request $request, Post $postModel)
    {
        $params = $request->all();
        $per_page = (int) $params['per_page'] ? (int) $params['per_page'] : 10;
        $posts = $postModel->getPosts($per_page);
        return new JsonResponse(['posts' => $posts], 200);
    }

    public function updatePost(Request $request, Post $postModel)
    {
        $params = $request->all();
        $id = $params['id'];
        $post = $postModel->updatePost($id, $params);
        return new JsonResponse(['post' => $post], 200);
    }

    public function createPost(Request $request, Post $postModel)
    {
        $params = $request->all();
        $post = $postModel->createPost($params);
        return new JsonResponse(['post' => $post], 200);
    }

    public function deletePost(Request $request, Post $postModel)
    {

        $params = $request->all();
        $id = $params['id'];
        $post = $postModel->deletePost($id);
        return new JsonResponse(['post' => $post], 200);
    }
}
