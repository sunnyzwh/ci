<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Message {

    public function __construct()
    {
    }

    public function showMessage($code, $msg, $data)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT");
        $outArr = array();
        $outArr['result']['status']['code'] = $code;
        $outArr['result']['status']['msg'] = $msg;
        $outArr['result']['data'] = $data;

        $json = json_encode($outArr);
        $callback = isset($_GET['callback']) ? $_GET['callback'] : '';
        if (!empty($callback) && preg_match("/^[a-zA-Z][a-zA-Z0-9_\.]+$/", $callback)) {
                if(isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], 'Trident')) {
                    header('Content-Type: text/javascript; charset=UTF-8');
                } else {
                    header('Content-Type: application/javascript; charset=UTF-8');
                }
                $json = "{$callback}({$json});";
        } else {
            header("Content-type:application/json; charset=utf-8");
        }
        echo $json;
        exit;
    }
}