<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    /**
     * @Route("/about", name="app_about")
     * @return Response
     */
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/list", name="app_list")
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('list.html.twig');
    }

    /**
     * @Route("/create", name="app_create")
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('create.html.twig');
    }

    /**
     * @Route("/list/show", name="app_show")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        return $this->render('project/show.html.twig');
    }
}
