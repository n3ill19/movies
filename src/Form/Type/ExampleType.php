<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// Importing the CaptchaType class
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;

class ExampleType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('captchaCode', CaptchaType::class, array(
        'captchaConfig' => 'ExampleCaptcha',
        'label' => 'Retype the characters from the picture'
      ))
      ->add('submit', SubmitType::class)
    ;
  }
}