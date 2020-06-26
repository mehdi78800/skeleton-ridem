<?php
 
namespace App\Controller;

use Ridem\AbstractController;

class HomeController extends AbstractController
{
    public function print() 
    {
        return $this->render('web/home');
    }
}
