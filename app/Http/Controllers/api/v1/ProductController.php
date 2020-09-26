<?php

namespace App\Http\Controllers\api\v1;

use App\Classes\Curl;
use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{

    public function import()
    {
        $url = 'https://novosibirsk.moba.ru/files/prices/?f=Price_Moba-Nsk_' . date('d-m-y') . '.xlsx';
        $filepath = storage_path() . '/files/moba_' . date('d-m-y') . '.xlsx';

        if ($file = Curl::getFileWithCurl($url, 'moba', 'xlsx')){
            dd((new ProductsImport));
            $products = (new ProductsImport)->toCollection($filepath);
            dd(new ProductsImport);
            return true;
        }else{
            return false;
        }
    }
}
