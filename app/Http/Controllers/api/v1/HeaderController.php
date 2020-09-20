<?php

namespace App\Http\Controllers\api\v1;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function getCategories(Category $categoryModel)
    {
        $categories = $categoryModel->getCategories();
        return new JsonResponse([], 200);
    }
}
