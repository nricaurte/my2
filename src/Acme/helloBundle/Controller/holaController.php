<?php
namespace Acme\helloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class holaController extends Controller {

function indexAction($name){

    return new Response ('<h1>'.$name.'</h1>');
}

}



?>