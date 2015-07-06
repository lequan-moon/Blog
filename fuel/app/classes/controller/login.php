<?php
use Fuel\Core\Controller;
use Fuel\Core\View;
use Fuel\Core\Response;
use Fuel\Core\Session;
use Fuel\Core\Input;
use helper\Util;

class Controller_Login extends Controller {
    public function get_index() {
        if(Util::isLogin()) {
            Response::redirect("admin");
        }
        return View::forge("login/index");
    }
    
    public function post_index() {
        $username = Input::post("username");
        $password = Input::post("password");
        $user = Model_User::find('first', array(
            'where' => array(
                array('username', $username),
            ),
        ));
        if (!empty($user)) {
            if(sha1($password) == $user->password) {
                Session::set("thecoder", $username);
                Response::redirect("admin");
            }
        }
        Session::set_flash("error", "Invalid username or password!");
        return View::forge("login/index");
    }
}