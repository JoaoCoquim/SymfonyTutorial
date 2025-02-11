<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function main(){

        return $this->render('home/index.html.twig');
    }

    #[Route('/custom/{slug?}', name: 'custom')]
    public function indexSlug(Request $request)
    {
        $slug = $request->get('slug');
        $message = "this is the first day of the rest of your life!";

        return $this->render('home/custom.html.twig', [
            'slug' => $slug,
            'message' => $message
        ]);

//        return $this->json([
//            'message' => 'Welcome to your new controller!',
//            'path' => 'src/Controller/MainController.php',
//            'yeah' => $variable,
//            'slug' => $slug
//        ]);
    }

}
