<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zhangwenhan
 * Date: 15/11/17
 * Time: 下午9:34
 */

require_once APPPATH . "third_party/Requests/Requests.php";

class MY_Curl extends Requests {

    public function __construct()
    {
        self::register_autoloader();
    }
}