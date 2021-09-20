<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function frontPage()
    {
        $data = ['name' => 'PHP MVC'];
        return $this->render('frontPage', $data);
    }
}
