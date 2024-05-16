<?php

namespace App\Controller\Api;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/contact', name: 'api_contact_')]
class ContactController extends AbstractController
{
  #[Route('s', name: 'index')]
  public function index(ContactRepository $contactRepo): JsonResponse
  {
    $Contacts = $contactRepo->findAll();
    return $this->json($Contacts, context: ['groups' => 'api_contact_index']);
  }

  #[Route('/{nom}', name: "show")]
  public function show(Contact $contact): JsonResponse
  {
    return $this->json($contact, context: ['groups' => ['api_contact_index', 'api_contact_show']]);
  }
}
