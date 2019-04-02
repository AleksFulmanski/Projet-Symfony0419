<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/page/{id}", requirements={"id"="[0-9]"})
     * @param int|null $id
     * @return Response
     */
    public function page(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }


    public function page2(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    /**
     * @Route("/page3/{id<[0-9]+>}", methods={"GET"})
     * @param int|null $id
     * @return Response
     */
    public function page3(?int $id = null): Response
    {
        var_dump($id);
        return $this->render('blog.html.twig');
    }

    /**
     * @Route("/redirige-moi-vers-accueil")
     * @return RedirectResponse
     */
    public function redirection(): RedirectResponse
    {
        return $this->redirectToRoute('app_homepage');
        /*return $this->redirect('https://tahititourisme.fr/fr-fr/');*/
    }

    /**
     * @Route("/formulaire/affichage")
     */
    public function displayForm(): Response
    {
        return $this->render('form/index.html.twig');
    }

    /**
     * @Route("/formulaire/traitement", name="form_handler")
     * @param Request $request
     * @param SessionInterface $session
     */
    public function handleForm(Request $request, SessionInterface $session)
    {
        var_dump($session);
        $posts = $request->request;
        var_dump($posts);
        var_dump('Le formulaire a été soumis');
        die('debug');
    }

    public function recupSession(Request $request)
    {
        $session = $request->getSession();
    }
}
