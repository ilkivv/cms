<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 20.09.20
 * Time: 17:32
 */

namespace App\Classes;


class Curl
{
    public static function getCurl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response ? $response : false;
    }

    public static function getFileWithCurl($url, $filename = 'file', $format = 'xlsx')
    {
        $file_name = storage_path() . '/files/' . $filename . '_' . date('d-m-y') . '.' . $format;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        $header = curl_getinfo($ch);

        if ($header['http_code'] != 200) return false;

        file_put_contents($file_name, $response);
        curl_close($ch);
        return true;
    }
}