<?php

namespace App\Controller\Api;

use App\Entity\Voyage;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/voyage', name: 'api_voyage_')]
class VoyageController extends AbstractController
{
  #[Route('s', name: 'index')]
  public function index(VoyageRepository $voyageRepo): JsonResponse
  {
    $Voyages = $voyageRepo->findAll();
    return $this->json($Voyages, context: ['groups' => 'api_voyage_index']);
  }

  #[Route('/{id}', name: "show")]
  public function show(Voyage $voyage): JsonResponse
  {
    return $this->json($voyage, context: ['groups' => ['api_voyage_index', 'api_voyage_show']]);
  }
}
