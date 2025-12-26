<?php

namespace App\Controller;

use App\Form\Type\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductsController extends AbstractController
{
    #[Route('/products/{id}', name: 'app_products')]
    public function index(int $id): Response
    {
        $productFrom = $this->createForm(ProductType::class ,[
            'quantity' => 1 ,
        ] , [
            'action' => '/cart',
            'method' => 'post' , 
        ]);
        return $this->render('products/index.html.twig', [
            'product_form' => $productFrom,
        ]);
    }
}
