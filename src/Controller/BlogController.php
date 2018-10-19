<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
  /**
   *
   * @Route("/", name="homepage")
   */
   public function homepage()
   {
        return new Response('PAgina inicial de nuestro Blog');
   }
}
