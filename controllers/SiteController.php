<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function frontPage(Request $request, Response $response)
    {
        $contactForm = new ContactForm();
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>',
            'model' => $contactForm
        ];
        if ($request->isPost()) {
            $contactForm->loadData($request->getBody());

            if ($contactForm->validate() && $contactForm->send()) {
                Application::$app->session->setFlash('success', 'Thanks for subscribing.');
                $response->redirect('/');
                return;
            }
        }
        return $this->render('frontPage', $data);
    }
}
