<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
      
        
        // return '<h1>Hello World!</h1>';
    }
    public function logoutAction()
    {
        $this->session->remove('userDetail');
        return $this->response->redirect('/');
    }
}