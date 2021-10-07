<?php

namespace app\controllers;

use istiaqhossain\phpmvc\Application;
use istiaqhossain\phpmvc\Controller;
use istiaqhossain\phpmvc\Request;
use istiaqhossain\phpmvc\Response;
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
