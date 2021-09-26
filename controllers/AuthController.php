<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        $registerModel = new RegisterModel();
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>',
            'model' => $registerModel
        ];
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }
            // echo '<pre>';
            // var_dump($registerModel->errors);
            // exit;
            if ($registerModel->validate() && $registerModel->register()) {
                return $this->render('auth/register', $data);
            }
        }
        return $this->render('auth/register', $data);
    }
}