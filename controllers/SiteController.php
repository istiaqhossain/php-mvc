<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function frontPage()
    {
        $data = [
            'title' => 'PHP MVC',
            'content' => 'Minimalistic custom framework created for educational purposes.<br><b>NOT READY FOR PRODUCTION</b>'
        ];
        return $this->render('frontPage', $data);
    }

    public function handleSubscriber(Request $request)
    {
        echo '<pre>';
        var_dump($request->getBody());
        exit;
    }
}
