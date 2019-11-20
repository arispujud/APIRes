<?php

namespace Apkit\Apires;

class Apires
{
    public static function index($str){
        $res = ['data' => $str];
        return $res;
    }

    /**
    * @param object $data
    * @return string
    */
    public static function format($data=null) {
        $status = false;
        $msg = [
            'dev' => __('api.data_not_found'),
            'prod' => __('api.data_not_found')
        ];
        $hasData = false;
        if(is_array($data)){
            if(count($data)>0){
                $hasData = true;
            }
        }
        else{
            if(!is_null($data)){
                $hasData = true;
            }
        }
        // $dt = null;
        // if(isset($data['status'])) $status = $data['status'];
        // if(isset($data['msg'])) $msg['dev'] = $data['msg']['dev'];
        // if(isset($data['msg'])) $msg['prod'] = $data['msg']['prod'];
        // if(isset($data['data'])) $data = $data['data'];
        if($hasData){
            $status = true;
            $msg =[
                'dev' => __('api.success'),
                'prod' => __('api.success')
            ];
        }

        $res = [
            "status" => $status,
            "message" => $msg,
            "data" => $data
        ];

        return $res;
    }

    public static function errorData($dev,$prod){
        $res = [
            "status" => false,
            "message" => array(
                "dev" => $dev,
                "prod" => $prod
            ),
            "data" => null
        ];

        return $res;

    }
}