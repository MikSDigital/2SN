<?php

namespace Quelp\ImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MurController extends Controller
{
    public function indexAction()
    {
        return $this->render('QuelpImageBundle:Common:mur.html.twig', array());
    }
}
