<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
  /**
   *
   * @Route("/", name="homepage")
   */
   public function homepage(Request $request)
   {
        return $this->render('home.html.twig');
   }
}
