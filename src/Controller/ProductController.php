<?php

namespace App\Controller;

use Cocur\Slugify\Slugify;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'products')]
    public function index(
        ProductRepository $productRepository
    ): Response
    {
        $slugTest = new Slugify();
        
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findBy(
                ['isPublished' => true],
                ['name' => 'ASC']
            ),
            'slugTest' => $slugTest->slugify('Generate a slug')
    ]);
    }

    #[Route('/{id}', name: 'product_show')]
    public function show(
        ProductRepository $productRepository,
        Request $request
    ): Response
    {
        $id = $request->get('id');
        return $this->render('product/show.html.twig', [
            'product' => $productRepository->findOneBy(
                ['id' => $id]
                )
    ]);
    }
}
