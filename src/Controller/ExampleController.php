<?php

namespace App\Controller;

use App\Entity\Example;
use App\Form\Type\ExampleType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExampleController extends AbstractController
{
  /**
   * @Route("/example")
   */
  
  public function getForm(Request $request)
  {
    // create contact form
    $form = $this->createForm(ExampleType::class, new Example());
    
    // initially, the message shown to the visitor is empty
    $message = '';

    $form ->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      // Captcha validation passed
      $message = 'CAPTCHA validation passed, human visitor confirmed!';
    }

    return $this->render('example/index.html.twig', array(
      'form' => $form->createView(),
      'message' => $message
    ));
  }
}