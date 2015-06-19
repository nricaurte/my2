<?php

namespace Acme\helloBundle\Contoller

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
   function indexAction($name){
     return array("<h1>hello '.$name.' dsdsfsdf</h1>");
    }
}
?>