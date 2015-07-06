<?php
namespace helper;
use Fuel\Core\Session;

class Util {
    public static function isLogin() {
        $sess = Session::get("thecoder");
        if(isset($sess)) {
            return true;
        }
        return false;
    }
}