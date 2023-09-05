<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestProductController extends AbstractController
{
    #[Route('/test-product', name: 'app_test_product')]
    public function index(): Response
    {

        $product = new Product();
        $product->setNom("Apple Mac Book");
        $product->setQuantite(17);
        $product->setDescription("Lorem description ........");
        dd($product);


        return $this->render('test_product/index.html.twig', [
            'controller_name' => 'TestProductController',
        ]);
    }
}
