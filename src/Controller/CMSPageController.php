<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CMSPageController extends AbstractController
{
    #[Route('/', name: 'staticpage')]
    public function index(): Response
    {
        return $this->render('cms_page/index.html.twig', [
            'controller_name' => 'CMSPageController',
        ]);
    }
}
