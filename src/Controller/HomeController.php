<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

}
