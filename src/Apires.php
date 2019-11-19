<?php

namespace Apkit\Apires;

class Apires
{
    public static function index($str){
        $res = ['data' => $str];
        return $res;
    }

    /**
    * @param int $number
    * @return string
    */
    public static function format($data=null) {
        $status = false;
        $msg = [
            'dev' => __('api.data_not_found'),
            'prod' => __('api.data_not_found')
        ];
        $dt = null;
        if(isset($data['status'])) $status = $data['status'];
        if(isset($data['msg'])) $msg['dev'] = $data['msg']['dev'];
        if(isset($data['msg'])) $msg['prod'] = $data['msg']['prod'];
        if(isset($data['data'])) $data = $data['data'];

        $res = [
            "status" => $status,
            "message" => $msg,
            "data" => $data
        ];

        return $res;
    }
}