<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Application;
use app\core\Request;
use app\core\Response;
use app\models\User;
use app\models\LoginForm;
use app\core\middlewares\AuthMiddleware;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }
    
    public function login(Request $request, Response $response)
    {
        $this->setLayout('auth');
        $loginForm = new LoginForm();
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>',
            'model' => $loginForm
        ];
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->session->setFlash('success', 'Thanks for login.');
                $response->redirect('/');
                return;
            }
        }
        return $this->render('auth/login', $data);
    }

    public function register(Request $request, Response $response)
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
                Application::$app->session->setFlash('success', 'Thanks for registering.');
                $response->redirect('/');
                return;
            }
        }
        return $this->render('auth/register', $data);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
        return;
    }

    public function profile()
    {
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Profile'
        ];
        return $this->render('profile', $data);
    }
}