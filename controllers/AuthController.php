<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>'
        ];
        return $this->render('auth/login', $data);
    }

    public function handleLogin(Request $request)
    {
        if ($request->isPost()) {
            echo '<pre>';
            var_dump($request->getBody());
            exit;
        }
    }

    public function register()
    {
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>'
        ];
        return $this->render('auth/register', $data);
    }

    public function handleRegister(Request $request)
    {
        if ($request->isPost()) {
            echo '<pre>';
            var_dump($request->getBody());
            exit;
        }
    }
}