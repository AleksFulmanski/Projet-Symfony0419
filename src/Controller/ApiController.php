<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/voyages")
     * @return JsonResponse
     */
    public function api(): JsonResponse
    {
        $voyages = ['Bali', "Thailande", "Corse"];
        return $this->json($voyages);
    }


    /**
     * @Route("api/product")
     * @return JsonResponse
     */
    public function displayJson(): JsonResponse
    {
        $product = [
            "id" => 1,
            "name" => 'Hamac',
            "price" => 10.95,
            "description" => 'Pour se reposer'
        ];
        return $this->json($product);
    }

    /**
     * @Route("/api/file")
     * @return BinaryFileResponse
     */
    public function displayFile(): BinaryFileResponse
    {
        return $this->file('pdf/support2.pdf', null, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/api/image")
     * @return BinaryFileResponse
     */
    public function displayImg(): BinaryFileResponse
    {
        return $this->file('img/espace.jpg', null, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
