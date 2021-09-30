<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>'
        ];
        if ($request->isPost()) {
            echo '<pre>';
            var_dump($request->getBody());
            exit;
        }
        return $this->render('auth/login', $data);
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        $user = new User();
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>',
            'model' => $user
        ];
        if ($request->isPost()) {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                return 'Success';
            }
            // echo '<pre>';
            // var_dump($user->errors);
            // exit;
            if ($user->validate() && $user->save()) {
                return $this->render('auth/register', $data);
            }
        }
        return $this->render('auth/register', $data);
    }
}