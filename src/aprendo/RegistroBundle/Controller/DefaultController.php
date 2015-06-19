<?php

namespace aprendo\RegistroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/fernando/")
     * @Template("aprendoRegistroBundle:Default:h.html.twig")
     */
    public function indexAction()
    {
        return array('name' => 'Fernando');
    }
}
