<?php

namespace App\Controller\Api;

use App\Entity\Destination;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/destination', name: 'api_destination_')]
class DestinationController extends AbstractController
{
  #[Route('s', name: 'index')]
  public function index(DestinationRepository $destinationRepo): JsonResponse
  {
    $Destinations = $destinationRepo->findAll();
    return $this->json($Destinations, context: ['groups' => 'api_destination_index']);
  }

  #[Route('/{nom}', name: "show")]
  public function show(Destination $destination): JsonResponse
  {
    return $this->json($destination, context: ['groups' => ['api_destination_index', 'api_destination_show']]);
  }
}
