<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

      /**
     * @Route("/rechercher", name="rechercher")
     */
    public function rechercher(ArticleRepository $articleRepository): Response
    {
        if (isset($_POST['submit'])) {
            extract($_POST);
            $articles = $articleRepository->findBy(['name' => $name]);
            return $this->render('article/rechercher.html.twig', [
                'articles' => $articles
            ]);
        } else {
            return $this->render('article/rechercher.html.twig', [
                'articles' => []
            ]);
        }
    }

}
