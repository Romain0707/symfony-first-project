<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        $form = $this ->createForm(ContactType::class);
        return $this->render('contact/contact.html.twig', [
            'form_name' => $form->createView(),
        ]);
    }
    
}
