<?php

namespace App\Controller;

use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(Request $request, FlasherInterface $flasher): Response
    {
		if ($request->query->has('flash'))
		{
			$flasher->error("Flash message depuis controller après redirection");
		}
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
