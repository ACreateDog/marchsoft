<?php

namespace app\admin\controller;

trait ImgUrl{
    public function getImageUrl($baseUrl){

//        $baseUrl = '/public/upload/image/20170416/8b9d96dba1d5fd99377cee603e7a8014.png';

        if (strpos($baseUrl,'/marchsoft') !== false)
            $baseUrl = trim($baseUrl,'/marchsoft');

        $baseUrl = trim($baseUrl ,'/');
        $serverName =  $_SERVER['HTTP_HOST'];
        $http = $_SERVER['REQUEST_SCHEME'];
        $URL = '';
        if ($_SERVER['DOCUMENT_ROOT'] != ROOT_PATH){
            $URL = $serverName.'/'.basename(ROOT_PATH).'/'.$baseUrl;
        }else{
            $URL = $serverName.'/'.$baseUrl;
        }
        $URL = $http.'://'.$URL;
        return $URL;

    }
}